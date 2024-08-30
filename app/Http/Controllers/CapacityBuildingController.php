<?php

namespace App\Http\Controllers;

use App\Models\CapacityBuilding;
use Illuminate\Http\Request;

class CapacityBuildingController extends Controller
{
    public function single($slug)
    {
        $post_single = CapacityBuilding::where('slug', $slug)->firstOrFail();

        if (!$post_single) {
            abort(404); // Display a 404 error if the post is not found
        }

        return view('capacitybuilding-single', ['data' => $post_single]);
    }

    public function index()
    {
        $posts_all = CapacityBuilding::all();
        $data = [
            'posts_all' => $posts_all
        ];

        return view('capacitybuilding', ['data' => $data]);
    }
}
