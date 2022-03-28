<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function aboutView(Request $request)
    {
        return view("pages.about");
    }

    function aboutUsView(Request $request)
    {
        return view("pages_us.about_us");
    }
}
