<?php

namespace App\Http\Controllers;

use App\Models\Activity;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function single($slug)
    {
        $post_single = Activity::where('slug', $slug)->firstOrFail();

        if (!$post_single) {
            abort(404); // Display a 404 error if the post is not found
        }

        return view('activity-single', ['data' => $post_single]);
    }

    public function index()
    {
        $posts_all = Activity::all();
        $data = [
            'posts_all' => $posts_all
        ];

        return view('activity', ['data' => $data]);
    }
}
