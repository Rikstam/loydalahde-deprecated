<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use Carbon\Carbon;

class PageController extends Controller
{
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
   // public function show($slug_or_id)
    //{
        //
   // }

    /**
     * @return string
     */
    public function getFrontPage()
    {
        $date = Carbon::now();
        $current_date = $date->format('d.m.Y');
        return view('frontpage', compact('current_date'));
    }
}
