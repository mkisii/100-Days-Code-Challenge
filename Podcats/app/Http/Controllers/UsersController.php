<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $podcasts = $user->podcasts;

        return view('/users.show', ['user' => $user]);
    }
}