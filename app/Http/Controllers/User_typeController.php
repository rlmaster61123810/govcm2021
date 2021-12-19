<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_typeController extends Controller
{
    public function toggle($id)
    {
       $user_type = \App\Models\User_type::find($id);
       //$user_type->status = $user_type->status == 0 ? 1 : 0;
       if($user_type->status == 0){
        $user_type->status = 1;
       }else{
        $user_type->status = 0;
       }
       $user_type->save();
       return $user_type->status == 0 ? "Admin" : "User";
    }
}
