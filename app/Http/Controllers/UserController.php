<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUser() {
        return view('profile.edit', ['user' => Auth::user()]);
    }
}
