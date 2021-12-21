<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
public function index()
{
    $users = User::select('id', 'name', 'email', 'status')->get();

    return view('community.index', compact('users'));
}
}
