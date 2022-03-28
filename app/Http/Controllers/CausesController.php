<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CausesController extends Controller
{
    function causesView(Request $request)
    {
        return view("pages.causes");
    }

    function causesUsView(Request $request)
    {
        return view("pages_us.causes_us");
    }
}
