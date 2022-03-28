<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contactView(Request $request)
    {
        return view("pages.contact");
    }

    function contactUsView(Request $request)
    {
        return view("pages_us.contact_us");
    }
}
