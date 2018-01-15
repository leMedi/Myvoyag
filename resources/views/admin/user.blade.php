@extends('layouts.master')

@section('body')
<div class="container pt-5 push-bottom">
    <div class="row">
        <div class="col-md-8">
            <div class="row mb-3">
                <div class="col-8 col-xl-10">
                    <h1 class="h2">Profile:</h1>
                </div>
            </div>

            @component('components.card')
                <h4 class="font-weight-bold mb-3">Informations Générales</h4>
                <dl class="d-flex py-2 m-2 border-bottom">
                    <dt class="w-25">Nom</dt>
                    <dd>{{ $user->firstName }} {{ $user->lastName }}</dd>
                </dl>
                <dl class="d-flex py-2 m-2 border-bottom">
                    <dt class="w-25">Email</dt>
                    <dd>{{ $user->email }}</dd>
                </dl>
                <dl class="d-flex py-2 m-2 border-bottom">
                    <dt class="w-25">Numéro Tel</dt>
                    <dd>{{ $user->tel }}</dd>
                </dl>
                <dl class="d-flex py-2 m-2 border-bottom">
                    <dt class="w-25">Date Naissance</dt>
                    <dd>{{ $user->date_naissance }}</dd>
                </dl>
                <dl class="d-flex py-2 m-2  border-bottom">
                    <dt class="w-25">CIN</dt>
                    <dd>{{ $user->cin }}
                        <small class="d-block text-danger ml-4">expiration: {{ $user->passport_expMonth }}/ {{ $user->passport_expYear }} </small>
                    </dd>
                </dl>
                <dl class="d-flex py-2 m-2">
                    <dt class="w-25">Passport</dt>
                    <dd>{{ $user->passport }}
                        <small class="d-block text-success ml-4">validiter: {{ $user->cin_valideMonth }}/ {{ $user->cin_valideYear }} </small>
                    </dd>
                </dl>
            @endcomponent

            @component('components.card')
                <h4 class="font-weight-bold mb-3">Jacobs Info</h4>
                <dl class="d-flex py-2 m-2 border-bottom">
                    <dt class="w-25">Déparetement</dt>
                    <dd>{{ $user->departement }}</dd>
                </dl>
                <dl class="d-flex py-2 m-2 border-bottom">
                    <dt class="w-25">Code d'imputation</dt>
                    <dd>{{ $user->code_imputation }}</dd>
                </dl>
                <dl class="d-flex py-2 m-2 border-bottom">
                    <dt class="w-25">Code d'etablissement</dt>
                    <dd>{{ $user->code_etablissement }}</dd>
                </dl>

                <dl class="d-flex py-2 m-2 border-bottom">
                    <dt class="w-25">Site</dt>
                    <dd>{{ $user->site->name }}</dd>
                </dl>
                <dl class="d-flex py-2 m-2">
                    <dt class="w-25">Adresse</dt>
                    <dd>{{ $user->site->address }}</dd>
                </dl>
            @endcomponent

            @component('components.card')
            <h4 class="font-weight-bold mb-3 ">Préférences</h4>
            <dl class="d-flex py-2 m-2 border-bottom">
                <dt class="w-50">Type de Transmission du voiture </dt>
                <dd>{{ $user->car_transmission }}</dd>
            </dl>
            <dl class="d-flex py-2 m-2 border-bottom">
                <dt class="w-50">Type de carburant du voiture</dt>
                <dd>{{ $user->car_carburant }}</dd>
            </dl>
            <dl class="d-flex py-2 m-2 border-bottom">
                <dt class="w-50">type de siège d'aviation </dt>
                <dd>{{ $user->flight_seat }}</dd>
            </dl>
            <dl class="d-flex py-2 m-2">
                <dt class="w-50">Est gold client chez Hertz?</dt>
                <dd>{{ $user->flight_seat? "Oui" : "Non" }}</dd>
            </dl>
            @endcomponent
        </div> <!-- .col -->
            
        <div class="col-md-4">
            @component('components.card')
                <div class="text-center">
                    <img id="avatar" class="avatar rounded-circle d-block w-50 mx-auto mb-3" src="/uploads/avatars/{{ $user->avatar }}" alt="">
                    <h2> {{$user->firstName}} {{$user->lastName}}</h2>
                </div>
            @endcomponent
            
            <div class="px-2">
                <h4 class="font-weight-bold mb-3">FAQ</h4>
                <ul class="dry-list">
                    <li class="mb-2"><a class="text-dark" href="#">How can I connect my bank account?</a></li>
                    <li class="mb-2"><a class="text-dark" href="#">Why Dashboard doesn’t show any data?</a></li>
                    <li class="mb-2"><a class="text-dark" href="#">If I change my avatar in one version will it appears in next version?</a></li>
                </ul>
                <a href="#">Visit FAQ Page</a>
            </div>
        </div> <!-- .col -->
    </div> <!-- .row -->
</div> <!-- .container -->

@if ($creditCard)
    <div  id="deleteCreditCard" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-3">
                    <h4 class="msg text-center">Voulez vous vraiment supprimer votre carte Banquére</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ url('/creditcards') }}/{{ $creditCard->id }}" method="POST" class="m-0">
                        {{ csrf_field() }}                        
                        <input type="hidden" name="_method" value="delete"/>
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection


