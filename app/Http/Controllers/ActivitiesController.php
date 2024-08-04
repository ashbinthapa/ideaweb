<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        return view('activity');
    }

    public function single()
    {
        return view('activity-single');
    }
}
