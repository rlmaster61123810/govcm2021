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
    public function index()
    {
        $lastestpost = Post::orderBy('created_at', 'desc')->take(5)->get();
        $posts = Post::all();

        $data = [
            'posts' => $posts,
            'lastestpost' => $lastestpost,
        ];
        return view('home', $data);
    }
}
