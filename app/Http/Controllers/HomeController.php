<?php

namespace App\Http\Controllers;
use App\User;
use App\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user();
        $demandes = Demande::where('user_id', $user->id)->get();
        return view('welcome',  [
            'user'     => $user,
            'demandes' => $demandes,
        ]);
    }

}
