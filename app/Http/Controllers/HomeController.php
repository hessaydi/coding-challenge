<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\View\View;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('home')
            ->with('posts', $posts);
    }

    public function master()
    {
        return view('vendor.master');
    }
    public function main(){
        $posts = Post::all();
        return view('articles')
            ->with('posts', $posts);
    }
}
