<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function show($id)
    {
        $user = User::find($id);
        // dd($user);
        return view('profile',['user' => $user]);
    }
}
