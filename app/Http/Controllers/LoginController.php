<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login($userType)
    {
        Auth::login(User::where('type', $userType)->first());

        return redirect()->route('home');
    }
}
