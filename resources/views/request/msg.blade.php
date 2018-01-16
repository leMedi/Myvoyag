@extends('layouts.master')

@section('body')

<div class="container">
    
    <div class="row my-5">
        <div class="col-12">
            <div class="my-5 text-center">
                <h2 class="mb-3">{{$message}}.</h2>
                <p class="text-mute h6">
                    revenir a la page d'accueil.
                    <a href="{{ url('/') }}">lien</a>
                </p>

            </div>
        </div>
    </div> <!-- .row -->

    
    
</div>

@endsection