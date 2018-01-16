<?php

namespace App\Http\Controllers;

use Validator;
use App\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SiteController extends Controller
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
        return view('admin.sites', [
            'sites' => Site::all(),
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
            'country'   => 'required|max:30',
            'city'      => 'required|max:30',
            'address'   => 'required',
        ]);

        $site = new Site;
        $site->name = Input::get('name');
        $site->country = Input::get('country');
        $site->city = Input::get('city');
        $site->address = Input::get('address');
        
        $site->save();
        
        return redirect('/sites');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        return view('admin.site', [
            'site'   => $site,
            'hotels' => $site->hotels,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        return view('admin.site_edit', [
            'site' => $site
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Site $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        $validator = request()->validate(
        [
            'name'      => 'required|max:30',
            'country'   => 'required|max:30',
            'city'      => 'required|max:30',
            'address'   => 'required',
        ]);

        $site->name = Input::get('name');
        $site->country = Input::get('country');
        $site->city = Input::get('city');
        $site->address = Input::get('address');
        
        $site->save();
        
        return redirect('/sites/' . $site->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        $site->delete();
        return redirect('/sites');
    }
}
