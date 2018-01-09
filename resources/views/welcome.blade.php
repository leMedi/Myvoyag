@extends('layouts.master')

@section('body')

<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="my-5 text-center">
                <h2 class="mb-3">Hi Jessica! Welcome back to the Dashboard.</h2>
                <p class="text-mute h6">
                    Check out your past searches and the content you’ve browsed in.
                    <a href="">View last results</a>
                </p>
            </div>
        </div>
    </div> <!-- .row -->

    <div class="row">
        <div class="col-sm-12 col-lg-4 mb-4">
            @component('components.landing_card', [
                'action_text'   => 'Start new Campaign',
                'action_link'   => '#',
                'img'           => asset('imgs/icon-intro1.svg')
            ])
                All Files ready? <br>
                Start promoting your apps today.
            @endcomponent
        </div>

        <div class="col-sm-12 col-lg-4 mb-4">
            @component('components.landing_card', [
                'action_text'   => 'Start new Campaign',
                'action_link'   => '#',
                'img'           => asset('imgs/icon-intro2.svg')
            ])
                Check your performance. See the results of all your active campaings.
            @endcomponent
        </div>

        <div class="col-sm-12 col-lg-4 mb-4">
            @component('components.landing_card', [
                'action_text'   => 'Start using Dashboard',
                'action_link'   => '#',
                'img'           => asset('imgs/icon-intro3.svg')
            ])
                Start console and prepare new stuff <br>
                for your customers or community!
            @endcomponent
        </div>
    </div> <!-- .row -->

</div>

@endsection