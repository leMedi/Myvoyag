@extends('layouts.master')

@section('body')

<div class="container">
    
    <div class="row my-5">
        <div class="col-12">
            <div class="my-5 text-center">
                <h2 class="mb-3">Hi {{$user->lastName }}! Bienvenue dans l' Acceuille.</h2>
            </div>
        </div>
    </div> <!-- .row -->

    
    @if(Auth::user()->tel == '')

        <div class="row">
            <div class="col-sm-12 offset-sm-4 col-lg-4 mb-4">
                @component('components.landing_card', [
                    'action_text'   => 'Remplire Infos',
                    'border'        => 'border border-danger',
                    'btn_classe'     => 'btn-danger',
                    'action_link'   => '/profile/edit',
                    'img'           => asset('imgs/icon-intro2.svg')
                    ])
                    Veuillez Completer Vos informartions de Profile, Merci!
                @endcomponent
            </div>
        </div>

    @else 

        <div class="row">
            <div class="col-sm-12 col-lg-4 mb-4">
                @component('components.landing_card', [
                    'action_text'   => 'saisir une demande',
                    'border'        => '',
                    'btn_classe'     => 'btn-primary',
                    'action_link'   => '/demande/create',
                    'img'           => asset('imgs/icon-intro3.svg')
                    ])
                    Saisir une nouvelle demande de voyage
                @endcomponent
            </div>

            <div class="col-sm-12 col-lg-4 mb-4">
                @component('components.landing_card', [
                    'action_text'   => 'acceder au liste',
                    'border'        => '',
                    'btn_classe'     => 'btn-primary',
                    'action_link'   => '/demandes',
                    'img'           => asset('imgs/icon-intro2.svg')
                    ])
                    Voir les voyages <br> organisés
                @endcomponent
            </div>

            <div class="col-sm-12 col-lg-4 mb-4">
                @component('components.landing_card', [
                    'action_text'   => 'Start using Dashboard',
                    'border'        => '',
                        'btn_classe'     => 'btn-primary',
                    'action_link'   => '/avalider',
                    'img'           => asset('imgs/icon-intro1.svg')
                    ])
                    Voir Notification <br>
                    et actualités
                @endcomponent
            </div>
        </div> <!-- .row -->
        <div id="table">
                <div class="row mb-1">
                        <div class="col-12">
                            <div class="my-5 text-center">
                                <h2 class="mb-1">Vos Demandes!</h2>
                            </div>
                        </div>
                    </div> <!-- .row -->
            <div class="row mb-5">
                <div class="col-sm-12 mt-1">
                    <table class="c-table">
                        <thead>
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head">Ville Destination</th>
                                <th class="c-table__cell c-table__cell--head">Site Destinantion</th>
                                <th class="c-table__cell c-table__cell--head">Ville Depart</th>
                                <th class="c-table__cell c-table__cell--head">Site Depart</th>
                                <th class="c-table__cell c-table__cell--head">Date d'aller</th>
                                <th class="c-table__cell c-table__cell--head">Date de retour</th>
                                <th class="c-table__cell c-table__cell--head">Etat de demande</th>
                            </tr>
                        </thead>
                        @foreach($demandes as $demande)
                            <tbody>
                                <tr class="c-table__row">
                                    
                                    <td class="c-table__cell">{{$demande->destinationSite->city}} </td>
                                    
                                    <td class="c-table__cell">{{$demande->destinationSite->name}} </td>
                                    
                                    <td class="c-table__cell">{{$demande->departureSite->city}} </td>
                                    
                                    <td class="c-table__cell">{{$demande->departureSite->name}} </td>

                                    <td class="c-table__cell">{{$demande->departure_date}} </td>
        
                                    <td class="c-table__cell" >{{$demande->return_date}}</td>
                                    @if($demande->approved == 'none' )
                                        <td class="c-table__cell"> <h4> <span class="badge badge-danger">Non approuvé</span></h4></td>
                                    @elseif($demande->approved == 'responsable')
                                        <td class="c-table__cell badge badge-warning">Non approuvé</td>
                                    @else                                    
                                        <td class="c-table__cell "> <span class="badge badge-success">Approuvé</span> </td>
                                    @endif
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    @endif
</div>

@endsection