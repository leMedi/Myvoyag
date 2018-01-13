<?php

namespace App\Http\Controllers;

use App\CreditCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class CreditCardController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = request()->validate(
        [
            'type'      => 'required|in:visa,mastercard,cihvisa,cihmastercard',
            'number'    => 'required|numeric|min:0',
            'expMonth'  => 'required|numeric|between:1,12',
            'expYear'   => 'required|numeric|between:2018,2100', // TODO: make this dynamic
        ]);

        $creditCard             = new CreditCard();
        $creditCard->type       = Input::get('type');
        $creditCard->number     = Input::get('number');
        $creditCard->expMonth   = Input::get('expMonth');
        $creditCard->expYear    = Input::get('expYear');
        $creditCard->user_id    = Auth::id();
        
        $creditCard->save();
        
        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CreditCard  $creditCard
     * @return \Illuminate\Http\Response
     */
    public function show(CreditCard $creditCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CreditCard  $creditCard
     * @return \Illuminate\Http\Response
     */
    public function edit(CreditCard $creditCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CreditCard  $creditCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreditCard $creditCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CreditCard  $creditCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreditCard $creditCard)
    {
        if(Auth::id() == $creditCard->user_id) // check if card owner
            $creditCard->delete();
    
        return redirect('/profile');
    }
}
