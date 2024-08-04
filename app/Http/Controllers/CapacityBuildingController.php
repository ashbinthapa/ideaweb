<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapacityBuildingController extends Controller
{
    public function index()
    {
        return view('capacitybuilding');
    }

    public function single()
    {
        return view('capacitybuilding-single');
    }
}
