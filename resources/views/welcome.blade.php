@extends('layouts.master')

@section('body')

<div class="container">
    
    <div class="row my-5">
        <div class="col-12">
            <div class="my-5 text-center">
                <h2 class="mb-3">Hi {{ Auth::user()->lastName }}! Bienvenue dans l' Acceuille.</h2>
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
                    'action_link'   => '',
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
                    'action_link'   => '#',
                    'img'           => asset('imgs/icon-intro1.svg')
                    ])
                    Voir Notification <br>
                    et actualités
                @endcomponent
            </div>
        </div> <!-- .row -->
        
    @endif

</div>

@endsection