<?php

namespace App\Http\Controllers;

use App\Models\Community_name;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {

        $communities = Community_name::all();
        return view('community_names.index', ['communities' => $communities]);
    }
    //Display a listing of the resource
    public function create()
    {
        return view('community_names.add');
    }
    //Store a newly created resource in storage
    public function store(Request $request)
    {
        $community_names = new Community_name();
        $community_names->name = $request->name;
        $community_names->save();
        return redirect('/community_names');
    }
    //Display the specified resource
    public function show($id)
    {
        $community_names = Community_name::find($id);
        return view('community_names.show', compact('community_names'));
    }
    //Show the form for editing the specified resource
    public function edit($id)
    {
        $community_names = Community_name::find($id);
        return view('community_names.edit', compact('community_names'));
    }
    //Update the specified resource in storage
    public function update(Request $request, $id)
    {
        $community_names = Community_name::find($id);
        $community_names->name = $request->name;
        $community_names->save();
        return redirect('/community_names');
    }
    //Remove the specified resource from storage
    public function destroy($id)
    {
        $community_names = Community_name::find($id);
        $community_names->delete();
        return redirect('/community_names');
    }
}
