{{--  @extends('layouts.master')

@section('body')

<div class="container">
    
    <div class="row">
        <div class="col-12">
            <div class="my-5 text-center">
                <h2 class="mb-3">Bienvenue dans l' Acceuille des voyage organisés.</h2>
                <p class="text-mute h6">
                    Veuillez choisir un voyage ou Remplir une nouvelle demande.
                    <a href="{{url('/demande/create')}}">nouvelle demande!</a>
                </p>
            </div>
        </div>
    </div> <!-- .row -->
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="row">
                    @foreach($demandes as $demande)
                        <div class="col-sm-2 col-lg-4">
                            @component('components.travel_card', [
                                'lien'      => '/demande/request/create/' . $demande->id,
                                'bg'        => 'https://zawiastudio.com/dashboard/demo/img/candidate2.jpg',
                                'dest'      => $demande->destinationSite->city,
                                'avatar'    => asset('/uploads/avatars/' . $demande->owner->avatar),
                                'arrive'    => $demande->departureSite->name,
                                'depart'    => $demande->destinationSite->name,
                                'date'      => $demande->departure_date,
                                'count'     => 5 - $demande->nbr_personnes,
                                'firstname' => $demande->owner->firstName, 
                                'lastname'  => $demande->owner->lastName,
                            ])
                            @endcomponent
                        </div>
                    @endforeach
                </div> <!-- .row -->
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
@endsection  --}}



@extends('layouts.master')

@section('body')

<div class="container" id="table">
    <div class="row mt-3">
        <div class="col-8 col-xl-10 my-3">
            <h2 class="h2">Liste des demandes à Prouver:</h2>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-sm-12 mt-2">
            <table class="c-table">
                <thead>
                    <tr class="c-table__row">
                        <th class="c-table__cell c-table__cell--head">Creer par</th>
                        <th class="c-table__cell c-table__cell--head">ville d'arriver</th>
                        <th class="c-table__cell c-table__cell--head">Site D'arriver</th>
                        <th class="c-table__cell c-table__cell--head">Ville Depart</th>
                        <th class="c-table__cell c-table__cell--head">Site Depart</th>
                        <th class="c-table__cell c-table__cell--head">Date d'aller</th>
                        <th class="c-table__cell c-table__cell--head">Date de retour</th>
                        <th class="c-table__cell c-table__cell--head"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($demandes as $demande)
                        
                        <tr class="c-table__row">

                            <td class="c-table__cell">{{$demande->owner->firstName}} {{$demande->owner->lastName}}</td>

                            <td class="c-table__cell">{{$demande->departureSite->city}}</td>
                            
                            <td class="c-table__cell">{{$demande->departureSite->name}}</td>
                            
                            <td class="c-table__cell">{{$demande->destinationSite->city}}</td>
                            
                            <td class="c-table__cell">{{$demande->destinationSite->name}}</td>

                            <td class="c-table__cell">{{$demande->departure_date}}</td>

                            <td class="c-table__cell" >{{$demande->return_date}}</td>

                            <td class="c-table__cell p-0">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button onClick="redirect('/')" type="submit" class="btn btn-success btn-sm">Accepter</button>
                                    <button onClick="redirect('/')" type="submit" class="btn btn-danger btn-sm">Refuser</button>
                                </div>
                                    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    
@endsection