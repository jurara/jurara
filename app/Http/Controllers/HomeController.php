<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function homeView(Request $request)
    {
        return view("pages.home");
    }

    function homeUsView(Request $request)
    {
        return view("pages_us.home_us");
    }
}
