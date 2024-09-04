<?php

namespace App\Http\Controllers;

use App\Models\Investigator;
use Illuminate\Http\Request;

class InvestigatorController extends Controller
{
    public function index()
    {
        $posts_all = Investigator::all();
        $data = [
            'posts_all' => $posts_all
        ];

        return view('investigators', ['data' => $data]);
    }
}
