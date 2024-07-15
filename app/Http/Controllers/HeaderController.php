<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class HeaderController extends Controller
{
    public function getlivedate()
    {
        $formattedDate = Carbon::now()->format('l, F j, Y');
        return view('index', compact('formattedDate'));
    }
}
