<?php

namespace App\Http\Controllers;

use App\Models\Naat;
use Illuminate\Http\Request;

class NaatController extends Controller
{
    public function index()
    {
        $posts_all = Naat::all();
        $data = [
            'posts_all' => $posts_all
        ];

        return view('product', ['data' => $data]);
    }
}
