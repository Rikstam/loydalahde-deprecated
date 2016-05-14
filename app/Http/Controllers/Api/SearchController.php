<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use App\Spring;
use Illuminate\Pagination\Paginator;

class SearchController extends Controller
{
    public function preFetchSearchTerms($searchTerm)
    {
        $name = '%' . strtolower($searchTerm) . '%';
        $cities = DB::select('SELECT c.name, COUNT(s.title) as hits FROM cities as c
        LEFT JOIN springs as s
        ON ST_DWITHIN(ST_MakePoint(c.longitude, c.latitude ), ST_MakePoint(s.longitude, s.latitude), 10000, false)
        WHERE lower(c.name) LIKE ? AND s.visibility = TRUE
        GROUP BY c.name', [$name]);

        $springsByTitle = DB::select('SELECT s.title as name, COUNT(*) as hits
FROM springs AS s WHERE lower(s.title) LIKE ? AND s.visibility = TRUE GROUP BY s.title', [$name]);

        $results = array_merge($cities, $springsByTitle);

        return ['cities' => $results];
    }

    public function searchByTerm(Request $searchRequest)
    {
        $searchTerm = $searchRequest->input('searchTerm');

        if (!empty($searchTerm)) {
            $title = strtolower($searchTerm) . '%';

            $springsByCity = collect(DB::select('SELECT s.id, s.title, s.status, s.slug, s.alias, s.short_description, s.image FROM cities as c
        LEFT JOIN springs as s
        ON ST_DWITHIN(ST_MakePoint(c.longitude, c.latitude), ST_MakePoint(s.longitude, s.latitude), 10000, false)
        WHERE lower(c.name) LIKE ? AND s.visibility = TRUE', [strtolower($searchTerm)]));

            $springsByTitle = collect(DB::select('SELECT s.id, s.title, s.status, s.slug, s.alias, s.short_description, s.image
FROM springs AS s WHERE lower(s.title) LIKE ? AND s.visibility = TRUE', [$title]));

            //return $springs;

            if (!$springsByCity->isEmpty()) {
                $springs = new Paginator($springsByCity, 10);
            } elseif (!$springsByTitle->isEmpty()) {
                $springs = new Paginator($springsByTitle, 10);
            } else {
                $springs = Spring::where('visibility', true)->orderBy('title', 'asc')->simplePaginate(10);
            }
        } else {
            $springs = Spring::where('visibility', true)->orderBy('title', 'asc')->simplePaginate(10);
            $searchTerm = 'Kaikki';
        }

        $seoTitle = 'Lähteet';

        return view('springs.index', compact('springs', 'searchTerm', 'seoTitle'));
    }
}
