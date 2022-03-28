<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function blogView(Request $request)
    {
        return view("pages.blog");
    }

    function blogUsView(Request $request)
    {
        return view("pages_us.blog_us");
    }
}
