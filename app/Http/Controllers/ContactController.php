<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $posts_all = Contact::all();
        $data = [
            'posts_all' => $posts_all
        ];

        return view('contact', ['data' => $data]);
    }
}
