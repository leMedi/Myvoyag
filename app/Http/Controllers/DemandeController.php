<?php

namespace App\Http\Controllers;

use App\Demande;
use App\Site;
use App\Hotel;

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
        // $demande->fight_departure_end_airport   = Input::get('departure')["endAirport"];
        

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

    public function step3(Demande $demande)
    {
        return view('demandes.step3', [
            'user'      => Auth::user(),
            'hotels'     => Hotel::all(),
            'demande'   => $demande
        ]);
    }

    public function saveStep3(Demande $demande)
    {
        $demande->hotel_id = Input::get('hotel_id');
        $demande->save();

        return redirect('demande/new/' . $demande->id . '/step4');
    }


    public function step4(Demande $demande)
    {
        return view('demandes.step4', [
            'user'      => Auth::user(),
            'demande'   => $demande
        ]);
    }

    public function saveStep4(Demande $demande, Request $request)
    {
        $validator = request()->validate(
        [   
            //start
            's_lieu_livraison' => 'required',
            's_heure_livraison' => 'required',
            's_lieu_restitution' => 'required',
            's_heure_restitution' => 'required',

            // end
            'e_lieu_livraison' => 'required',
            'e_heure_livraison' => 'required',
            'e_lieu_restitution' => 'required',
            'e_heure_restitution' => 'required',

            // arrival
            'a_lieu_livraison' => 'required',
            'a_heure_livraison' => 'required',
            'a_lieu_restitution' => 'required',
            'a_heure_restitution' => 'required',
        ]);

        $demande->s_lieu_livraison = Input::get('s_lieu_livraison');
        $demande->s_heure_livraison = Input::get('s_heure_livraison');
        $demande->s_lieu_restitution = Input::get('s_lieu_restitution');
        $demande->s_heure_restitution = Input::get('s_heure_restitution');

        $demande->e_lieu_livraison = Input::get('e_lieu_livraison');
        $demande->e_heure_livraison = Input::get('e_heure_livraison');
        $demande->e_lieu_restitution = Input::get('e_lieu_restitution');
        $demande->e_heure_restitution = Input::get('e_heure_restitution');

        $demande->a_lieu_livraison = Input::get('a_lieu_livraison');
        $demande->a_heure_livraison = Input::get('a_heure_livraison');
        $demande->a_lieu_restitution = Input::get('a_lieu_restitution');
        $demande->a_heure_restitution = Input::get('a_heure_restitution');

        $demande->save();

        return redirect('/');
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
