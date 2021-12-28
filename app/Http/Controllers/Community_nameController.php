<?php

namespace App\Http\Controllers;

use App\Models\Community_name;
use Illuminate\Http\Request;

class Community_nameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $community_names = \App\Models\Community_name::all();

        return view('community_name.index', compact('community_names'));
    }
    public function create()
    {
        return view('community_name.add');
    }
    public function store()
    {
        $community_names = new \App\Models\Community_name(); //INSERT

        $community_names->name = request()->name;
        $community_names->save();
        return redirect('/');
    }
    public function edit($community_id)
    {
        $community_name = \App\Models\Community_name::find(request()->id);

        return view('community_name.edit', compact('community_name'));
    }
    public function update($community_id)
    {
        $community_names = \App\Models\Community_name::find(request()->id);

        $community_names->name = request()->name;
        $community_names->save();
        return redirect('/');
    }
    public function destroy($id)
    {
        // SELECT * FROM Users WHERE User_id = '$id';
        $community = Community_name::find($id);
        $community->delete();
        return redirect('/users');
    }

}
