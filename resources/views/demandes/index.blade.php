@extends('layouts.master')

@section('body')

<div class="container">
    
    <div class="row">
        <div class="col-12">
            <div class="my-5 text-center">
                <h2 class="mb-3">Bienvenue dans l' Acceuille des voyage organisés.</h2>
                <p class="text-mute h6">
                    Veuillez choisir un voyage ou Remplir une nouvelle demande.
                    <a href="">nouvelle demande!</a>
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
                    <div class="col-sm-2 col-lg-4">
                        @component('components.travel_card', [
                            'bg'        => 'https://zawiastudio.com/dashboard/demo/img/candidate2.jpg',
                            'avatar'    => 'https://zawiastudio.com/dashboard/demo/img/avatar-72.jpg',
                            'location'  => 'Korea',
                            'count'     => '3',
                        ])
                            Mathilda Campbell
                        @endcomponent
                    </div>
            
                    <div class="col-sm-2 col-lg-4">
                        @component('components.travel_card', [
                            'bg'        => 'https://zawiastudio.com/dashboard/demo/img/candidate2.jpg',
                            'avatar'    => 'https://zawiastudio.com/dashboard/demo/img/avatar-72.jpg',
                            'location'  => 'Korea',
                            'count'     => '3',
                        ])
                            Mathilda Campbell
                        @endcomponent
                    </div>
            
                    <div class="col-sm-2 col-lg-4">
                        @component('components.travel_card', [
                            'bg'        => 'https://zawiastudio.com/dashboard/demo/img/candidate2.jpg',
                            'avatar'    => 'https://zawiastudio.com/dashboard/demo/img/avatar-72.jpg',
                            'location'  => 'Korea',
                            'count'     => '3',
                        ])
                            Mathilda Campbell
                        @endcomponent
                    </div>
                </div> <!-- .row -->
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
@endsection