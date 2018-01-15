<?php

namespace App\Http\Controllers;

use App\Demande;
use App\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function saveTicket(Demande $demande, Request $request)
    {
        $demande->departure_site_id = Input::get('site_from');
        $demande->destination_site_id = Input::get('site_to');

        // departure
        $demande->fight_departure_end_airport   = Input::get('departure')["endAirport"];
        

        $demande->fight_departure_start_airport = Input::get('departure')["startAirport"];
        $demande->fight_departure_end_airport   = Input::get('departure')["endAirport"];
        
        $demande->fight_departure_start_date = Input::get('departure')["startDateRaw"];
        $demande->fight_departure_start_time = Input::get('departure')["startTime"];

        $demande->fight_departure_end_date = Input::get('departure')["endDateRaw"];
        $demande->fight_departure_end_time = Input::get('departure')["endTime"];

        $demande->fight_departure_durration = Input::get('departure')["duration"];

        // return
        $demande->fight_return_start_airport = Input::get('arrival')["startAirport"];
        $demande->fight_return_end_airport   = Input::get('arrival')["endAirport"];

        $demande->fight_return_start_date = Input::get('arrival')["startDateRaw"];
        $demande->fight_return_start_time = Input::get('arrival')["startTime"];
    
        $demande->fight_return_end_date = Input::get('arrival')["endDateRaw"];
        $demande->fight_return_end_time = Input::get('arrival')["endTime"];

        $demande->fight_return_duartion = Input::get('arrival')["duration"];
        
        $demande->flight_price = Input::get('price');
        $demande->flight_currency = Input::get('currency');

        // $demande->duration = Input::get('arrival')["startTime"];

        $demande->save();

        return "yes";
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $demande = new Demande();
        $demande->user_id = Auth::id();
        $demande->save();

        return redirect('/demande/new/' . $demande->id . '/step1');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show(Demande $demande)
    {
        //
    }

    public function step1(Demande $demande)
    {

        return view('demandes.step1', [
            'demande' => $demande
        ]);
    }

    public function saveStep1(Demande $demande, Request $request)
    {
        $validator = request()->validate(
        [
            'subjet'      => 'required',
            'departure_date'   => 'required|date_format:Y-m-d',
            'return_date'      => 'required|date_format:Y-m-d|after:departure_date',
        ]);

        $demande->subjet = Input::get('subjet');
        $demande->departure_date = Input::get('departure_date');
        $demande->return_date = Input::get('return_date');

        $demande->save();

        return redirect('/demande/new/' . $demande->id . '/step2');
    }


    public function step2(Demande $demande)
    {
        return view('demandes.step2', [
            'user'      => Auth::user(),
            'sites'     => Site::all(),
            'demande'   => $demande
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function edit(Demande $demande)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demande $demande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demande $demande)
    {
        //
    }
}
