@extends('layouts.master')

@section('body')
<div class="container pt-5 push-bottom">
    <div class="row">
        <div class="col-md-8">
            <div class="row mb-3">
                <div class="col-8 col-xl-10">
                    <h1 class="h2">Profile</h1>
                </div>
                <div class="col-4 col-xl-2">
                    <a href="#" class="btn btn-secondary float-right">Modifier</a>
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
                    <dt class="w-25">Departement</dt>
                    <dd>{{ $user->tel }}</dd>
                </dl>
                <dl class="d-flex py-2 m-2">
                    <dt class="w-25">Passport</dt>
                    <dd>{{ $user->numPass }}</dd>
                </dl>
            @endcomponent

            @component('components.card')
                <h4 class="font-weight-bold mb-3">Jacobs Info</h4>
                <dl class="d-flex py-2 m-2">
                    <dt class="w-25">Déparetement</dt>
                    <dd>{{ $user->departement }}</dd>
                </dl>
            @endcomponent

            @component('components.card', [
                'border' => 'danger'
            ])
                <h4 class="font-weight-bold mb-3">Password</h4>
                <p>Remplire les Champs pour chnager le Mot de Pass.</p>
                <form class="overflow-hidden mb-2">
                    <div class="form-group row border-bottom pb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Ancient</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="Ancient Mot de Pass">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nouveau</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="Nouveau Mot de Pass">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Confimer</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Confirmer le Mot de Pass">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-danger mt-2 float-right">Changer le Mot de Pass</button>
                </form>
            @endcomponent
            </div> <!-- .col -->
            
            <div class="col-md-4">
            @component('components.card')
                <div class="text-center">
                    <img class="avatar rounded-circle d-block w-50 mx-auto mb-3" src="https://zawiastudio.com/dashboard/demo/img/avatar-150.jpg" alt="">
                    <button class="d-inline btn btn-primary">Change Picture</button>
                </div>
            @endcomponent
            
            <div class="row mb-2 mt-5">
                <div class="col-8">
                    <h4 class="font-weight-bold">Carte Banquére</h4>
                </div>
                
                <div class="col-4">
                    @if ($creditCard)
                        <div class="btn-group">
                            <button class="btn btn-secondary" data-toggle="modal" data-target="#deleteCreditCard" type="button">
                                Supprimer
                            </button>
                        </div>
                    @endif
                    </div>
                </div>
                
                @if ($creditCard)
                    @component('components.creditcard', [
                        'logo'   => asset('imgs/creditcards/') . '/' . $creditCard->type . '.png',
                        'expire' => $creditCard->expirydate(),
                    ])
                        {{ $creditCard->cardNumber() }}
                    @endcomponent
                @else
                    @component('components.card')
                        <form action="{{ url('/creditcards') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="modal-body p-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Type</label>
                                        <div class="form-group">
                                            <select name="type" class="form-control">
                                                <option value="visa">Visa</option>
                                                <option value="mastercard">Mastercard</option>
                                                <option value="cihvisa">CIH Visa</option>
                                                <option value="cihmastercard">CIH Mastercard</option>
                                            </select>
                                        </div>
                                        @if ($errors->has('type'))
                                        <p class="text-danger">{{ $errors->first('type') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Numéro</label>
                                        @if ($errors->has('number'))
                                        <input name="number" type="text" class="form-control is-invalid" value="{{ old('number') }}">
                                        <div class="invalid-feedback">{{ $errors->first('number') }}</div>
                                        @else
                                        <input name="number" type="text" class="form-control" placeholder="2834 2794 4779 3671" value="{{ old('number') }}">
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Mois D'experation</label>
                                            @if ($errors->has('expMonth'))
                                        <input name="expMonth" type="number" min="1" max="12" class="form-control is-invalid" value="{{ old('expMonth') }}">
                                        <div class="invalid-feedback">{{ $errors->first('expMonth') }}</div>
                                        @else
                                        <input name="expMonth" type="number" min="1" max="12" class="form-control" placeholder="1" value="{{ old('number') }}">
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Annee D'experation</label>
                                            @if ($errors->has('expYear'))
                                        <input name="expYear" type="number" min="2018" max="2030" class="form-control is-invalid" value="{{ old('expYear') }}">
                                        <div class="invalid-feedback">{{ $errors->first('expYear') }}</div>
                                        @else
                                        <input name="expYear" type="number" min="2018" max="2030" class="form-control" value="2018" value="{{ old('number', '2018') }}">
                                        @endif
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary float-right mr-3">Ajouter</button>
                            </form>
                    @endcomponent
                @endif
            
                
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