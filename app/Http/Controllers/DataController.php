<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        // Your logic for the data page
        return view('data'); // Assuming you have a data.blade.php view
    }
}
