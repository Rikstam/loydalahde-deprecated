<?php

namespace App\Http\Controllers\Api;

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
        //if (Cache::has('api-springs')) {
          //  $springs = Cache::get('springs');
        //} else {
            $springs = Spring::where('visibility', true)
            ->whereNotNull('latitude')
            ->whereNotNull('longitude')
            ->select('title','latitude','longitude', 'tested_at', 'status', 'slug')
            ->get();

        //Cache::put('api-springs', $springs, 120);
       // }

        return $springs->toJson(JSON_NUMERIC_CHECK);
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
    public function show($id)
    {
        $spring = Spring::where('id', $id)->first();

        return $spring;
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
