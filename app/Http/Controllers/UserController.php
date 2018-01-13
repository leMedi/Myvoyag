<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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

    public function updateAvatar(Request $request){

        if ($request->hasFile('avatar')){

            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(154,154)->save(public_path('/uploads/avatars/'. $filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return redirect('/profile');
    }


}
