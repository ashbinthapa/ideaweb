<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $posts_all = Product::all();
        $data = [
            'posts_all' => $posts_all
        ];

        return view('product', ['data' => $data]);
    }
}
