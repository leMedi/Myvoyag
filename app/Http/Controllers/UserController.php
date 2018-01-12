<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users', [
            'users' => User::all(),
        ]);
    }


    public function profile()
    {
        $user = Auth::user();
        return view('profile', [
            'user'       => $user,
            'creditCard' => $user->creditCard
        ]);
    }
}
