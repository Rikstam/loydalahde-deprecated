<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller {

    //

    public function index()
    {
        $user = Auth::user();

        //$user_role = $user->roles()->first();

        return view('admin.home', compact('user'));
    }

}
