<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use Carbon\Carbon;

class PageController extends Controller
{

  public function index($slug)
  {
        $page = Page::findBySlug($slug);
        //dd($page);

        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }

        //$this->data['title'] = $page->title;
        //$this->data['page'] = $page->withFakes();

        return view('pages.'.$page->template, compact('page'));
    }

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
