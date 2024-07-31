<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        // Your logic for the data page
        return view('publication'); // Assuming you have a data.blade.php view
    }
}
