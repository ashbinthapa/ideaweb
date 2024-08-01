<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestigatorController extends Controller
{
    public function index()
    {
        return view('investigators');
    }
}
