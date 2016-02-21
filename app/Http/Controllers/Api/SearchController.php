<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function preFetchSearchTerms($searchTerm)
    {
        $name = '%' . strtolower($searchTerm) . '%';
        $cities = DB::select('SELECT c.name, COUNT(s.title) as hits FROM cities as c
        LEFT JOIN springs as s
        ON ST_DWITHIN(c.location, s.location, 10000)
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
        $title = strtolower($searchTerm) . '%';

        $springsByCity = collect(DB::select('SELECT s.id, s.title, s.status, s.alias, s.short_description, s.image FROM cities as c
        LEFT JOIN springs as s
        ON ST_DWITHIN(c.location, s.location, 10000)
        WHERE lower(c.name) LIKE ? AND s.visibility = TRUE', [strtolower($searchTerm)]));

        $springsByTitle = collect(DB::select('SELECT s.id, s.title, s.status, s.alias, s.short_description, s.image
FROM springs AS s WHERE lower(s.title) LIKE ? AND s.visibility = TRUE', [$title]));

        //return $springs;

        if ( ! $springsByCity->isEmpty() ) {
            $springs = $springsByCity;
        } elseif (! $springsByTitle->isEmpty()) {
            $springs = $springsByTitle;
        } else {
            $springs = [];
        }

        return view('springs.index', compact('springs','searchTerm'));
    }
}
