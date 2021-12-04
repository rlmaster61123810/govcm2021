<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_layoutController extends Controller
{
    public function index()
    {
        return view('admin.admin_layout');
    }
}
