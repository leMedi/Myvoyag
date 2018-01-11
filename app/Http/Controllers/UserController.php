<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users', [
            'users' => User::all(),
        ]);
    }
}
