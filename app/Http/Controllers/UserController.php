<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('id', 'name', 'email', 'status')->get();

        return view('users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_type = User_type::all();

        $data = [
            'user_types' => $user_type,
        ];
        return view('users.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $users = new User(); //INSERT
        $users->name = request()->name;
        $users->email = request()->email;
        $users->password = request()->password;
        $users->status =  request()->status;
        $users->save();
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        $user_type = User_type::all();
        $users = User::find($user_id);

        $data = [
            'user_types' => $user_type,
            'users' => $users
        ];
        return view('users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $users = User::find(request()->id);
        $users->name = request()->name;
        $users->email = request()->email;
        $users->password = request()->password;
        $users->status =  request()->status;
        $users->save();
        return redirect('/users');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // SELECT * FROM Users WHERE User_id = '$id';
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }
}
