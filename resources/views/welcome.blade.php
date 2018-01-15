@extends('layouts.master')

@section('body')

<div class="container">
    
    <div class="row">
        <div class="col-12">
            <div class="my-5 text-center">
                <h2 class="mb-3">Hi {{ Auth::user()->lastName }}! Bienvenue dans l' Acceille.</h2>
                <p class="text-mute h6">
                    Check out your past searches and the content you’ve browsed in.
                    <a href="">View last results</a>
                </p>
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
                    'action_text'   => 'Start using Dashboard',
                    'border'        => '',
                    'btn_classe'     => 'btn-primary',
                    'action_link'   => '#',
                    'img'           => asset('imgs/icon-intro3.svg')
                    ])
                    Start console and prepare new stuff <br>
                    for your customers or community!
                @endcomponent
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
        @endif
    </div>
    
@endsection