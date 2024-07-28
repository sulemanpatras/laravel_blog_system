<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function view()
    {
        $data = blog::all();
        $posts = compact('data');
        return view('jugaad')->with($posts);
    }
}
