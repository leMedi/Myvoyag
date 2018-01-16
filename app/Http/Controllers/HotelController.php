<?php

namespace App\Http\Controllers;

use Validator;
use App\Hotel;
use App\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HotelController extends Controller
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
        return view('admin.hotels', [
            'hotels' => Hotel::all(),
            'sites'  => Site::all(), 
        ]);
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
            'name'      => 'required|max:30',
            'tel'       => 'required',
            'rating'    => 'required|numeric|between:1,5',
            'country'   => 'required|max:30',
            'city'      => 'required|max:30',
            'address'   => 'required',
            'price'     => 'required|min:0',
            'site_id'   => 'required',
            'distance'   => 'required',
            
            
        ]);

        $hotel = new Hotel;
        $hotel->name = Input::get('name');
        $hotel->tel = Input::get('tel');
        $hotel->rating = Input::get('rating');
        $hotel->country = Input::get('country');
        $hotel->city = Input::get('city');
        $hotel->address = Input::get('address');
        $hotel->price = Input::get('price');
        $hotel->site_id = Input::get('site_id');
        $hotel->distance = Input::get('distance');
        
        if($request->has('with_food'))
            $hotel->with_food = true;
        else
            $hotel->with_food = false;
        
        $hotel->save();
        
        return redirect('/hotels');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view('admin.hotel', [
            'hotel' => $hotel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('admin.hotel_edit', [
            'hotel' => $hotel,
            'sites'  => Site::all(), 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $validator = request()->validate(
        [
            'name'      => 'required|max:30',
            'tel'       => 'required',
            'rating'    => 'required|numeric|between:1,5',
            'country'   => 'required|max:30',
            'city'      => 'required|max:30',
            'address'   => 'required',
            'price'     => 'required|min:0',
            'site_id'   => 'required',
            'distance'   => 'required',
        ]);

        $hotel->name    = Input::get('name');
        $hotel->tel     = Input::get('tel');
        $hotel->rating  = Input::get('rating');
        $hotel->country = Input::get('country');
        $hotel->city    = Input::get('city');
        $hotel->address = Input::get('address');
        $hotel->price   = Input::get('price');
        $hotel->site_id = Input::get('site_id');
        $hotel->distance = Input::get('distance');
        
        if($request->has('with_food'))
            $hotel->with_food = true;
        else
            $hotel->with_food = false;
        
        $hotel->save();
        
        return redirect('/hotels/' . $hotel->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect('/hotels');
    }
}
