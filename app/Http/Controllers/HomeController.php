<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $posts = Post::orderBy('id', 'desc')->simplePaginate(5);
        return view('home',compact('posts'));
    }
    public function customerQueries()
    {
        $posts = Post::orderBy('id', 'desc')->simplePaginate(5);
        return view('pages.customer-queries', compact('posts'));
    }
}
