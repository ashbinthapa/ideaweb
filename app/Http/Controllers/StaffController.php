<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $posts_all = Staff::all();
        $data = [
            'posts_all' => $posts_all
        ];

        return view('staff', ['data' => $data]);
    }
}
}
