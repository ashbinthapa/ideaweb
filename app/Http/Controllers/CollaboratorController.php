<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use Illuminate\Http\Request;

class CollaboratorController extends Controller
{
    public function index()
    {
        $posts_all = Collaborator::all();
        $data = [
            'posts_all' => $posts_all
        ];

        return view('collaborator', ['data' => $data]);
    }
}
