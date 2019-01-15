<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users/user', compact('users', $users));
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        return view('users/update', compact('user', $user));
    }
}