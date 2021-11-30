<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        $posts = Post::where('user_id,$id')->orderBy('id', 'desc')->paginate(10);
        $data = [
            'posts' => $posts,
        ];

        return view('posts.index'>$data);
    }
}
