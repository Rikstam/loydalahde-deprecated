<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Spring;
use Illuminate\Support\Facades\Cache;

class SpringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //return Spring::all();

        if (Cache::has('index-springs')){
            $springs = Cache::get('index-springs');
        } else {
            $springs = Spring::where('visibility', true)->orderBy('title','asc')->simplePaginate(12);
            Cache::put('index-springs', $springs, 120);
        }

        $seoTitle = 'Lähteet';
        return view('springs.index', compact('springs', 'seoTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $spring = Spring::whereSlug($slug)->with('images')->first();
         //   dd($spring);
        //$seoTitle = $spring->title;

        return view('springs.show', compact('spring'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
