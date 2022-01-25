<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lastPost = Post::orderBy('id', 'desc')->take(3)->get();
        return view('pages.home',compact('lastPost'));
    }
}
