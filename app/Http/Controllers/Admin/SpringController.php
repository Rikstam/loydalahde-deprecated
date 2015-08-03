<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\spring;
use Phaza\LaravelPostgis\Geometries\Point;

class SpringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.springs.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $spring = new Spring();

        $spring->title = $request->get('title');
        $spring->alias = $request->get('alias');
        $spring->status = $request->get('status');
        $spring->description = $request->get('description');
        $spring->short_description = $request->get('short_description');
        $lat = $request->get('latitude');
        $lng = $request->get('longitude');
        $spring->location = new Point( $lat, $lng );

        $spring->visibility = $request->get('visibility');

        $spring->save();

        return redirect('lahteet');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
