<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;


use Carbon\Carbon;

class HeaderController extends Controller
{
    public function index()
    {
        $posts_all = Activity::all(); // Fetch all activities
        $formattedDate = now()->format('l, F j, Y'); // Current date

        $data = [
            'posts_all' => $posts_all,
        ];

        return view('partials.header', compact('data', 'formattedDate'));
    }
}
