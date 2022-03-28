<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    function volunteerView(Request $request)
    {
        return view("pages.volunteer");
    }

    function volunteerUsView(Request $request)
    {
        return view("pages_us.volunteer_us");
    }
}
