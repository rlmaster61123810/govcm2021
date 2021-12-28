<?php

namespace App\Http\Controllers;

use App\Models\Community_name;
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
        $communities = Community_name::all();
        return view('community_names.index', ['communities' => $communities]);
    }
}
