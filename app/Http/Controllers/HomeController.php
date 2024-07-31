<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Your logic for the home page
        return view('index'); // Assuming you have a welcome.blade.php view
    }
}
