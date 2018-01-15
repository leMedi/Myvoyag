@extends('layouts.sidemenu')

@section('main')
     <div class="row mb-3">
        <div class="col-8 col-xl-10">
            <h1 class="h2">Modifier Votre Profile:</h1>
        </div>
        <div class="col-4 col-xl-2">
        </div>
    </div> <!-- .row -->

    <form action="{{ url('users/') }}/{{ $user->id }}" method="POST">
        {{ csrf_field() }}

        @component('components.card')

            <h3 class="font-weight-bold mb-4">Informations Générales</h3>
            <div class="form-group row ">
                <div class="col-sm-6">
                    <label class="col-form-label">Prenom</label>
                    @if ($errors->has('firstName'))
                    <input name="firstName" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('firstName') }}</div>
                    @else
                    <input name="firstName" type="text" class="form-control" value="{{ $user->firstName }}">
                    @endif
                </div>
                <div class="col-sm-6">
                    <label class="col-form-label">Nom</label>
                    @if ($errors->has('lastName'))
                    <input name="lastName" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('lastName') }}</div>
                    @else
                    <input name="lastName" type="text" class="form-control" value="{{ $user->lastName }}">
                    @endif
                </div>
            </div>
        
            <div class="form-group row mb-4">
                <div class="col-sm-4">
                    <label class="col-form-label">email</label>
                    @if ($errors->has('email'))
                    <input name="email" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @else
                    <input name="email" type="text" class="form-control" value="{{ $user->email }}">
                    @endif
                </div>
                <div class="col-sm-4">
                    <label class="col-form-label">Numéro Telephone</label>
                    @if ($errors->has('tel'))
                    <input name="tel" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('tel') }}</div>
                    @else
                    <input name="tel" type="text" class="form-control" value="{{ $user->tel }}">
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="col-form-label">Date Naissance</label>
                    @if ($errors->has('date_naissance'))
                    <input name="date_naissance" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('date_naissance') }}</div>
                    @else
                    <input name="date_naissance" type="date" class="form-control" value="{{ $user->date_naissance }}">
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="col-form-label">Passport</label>
                    @if ($errors->has('passport'))
                    <input name="passport" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('passport') }}</div>
                    @else
                    <input name="passport" type="text" class="form-control" value="{{ $user->passport }}">
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="col-form-label">Mois D'experation</label>
                    @if ($errors->has('passport_expMonth'))
                    <input name="passport_expMonth" type="number" min="1" max="12" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('passport_expMonth') }}</div>
                    @else
                    <input name="passport_expMonth" type="number" min="1" max="12" class="form-control" placeholder="1" value="{{ $user->passport_expMonth }}">
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="col-form-label">Année D'experation</label>
                    @if ($errors->has('passport_expYear'))
                    <input name="passport_expYear" type="number" min="2018" max="2030" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('passport_expYear') }}</div>
                    @else
                    <input name="passport_expYear" type="number" min="2018" max="2030" class="form-control" value="{{ $user->passport_expYear }}">
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="col-form-label">CIN</label>
                    @if ($errors->has('cin'))
                    <input name="cin" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('cin') }}</div>
                    @else
                    <input name="cin" type="text" class="form-control" value="{{ $user->cin }}">
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="col-form-label">Mois De Validation</label>
                    @if ($errors->has('cin_valideMonth'))
                    <input name="cin_valideMonth" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('cin_valideMonth') }}</div>
                    @else
                    <input name="cin_valideMonth" type="text" class="form-control" value="{{ $user->cin_valideMonth }}">
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="col-form-label">Année De Validation </label>
                    @if ($errors->has('cin_valideYear'))
                    <input name="cin_valideYear" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('cin_valideYear') }}</div>
                    @else
                    <input name="cin_valideYear" type="text" class="form-control" value="{{ $user->cin_valideYear }}">
                    @endif
                </div>
            </div>
        @endcomponent


        @component('components.card')

            <h3 class="font-weight-bold mb-4">Jacobs Info</h3>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Departement</label>
                <div class="col-sm-9">
                    @if ($errors->has('departement'))
                    <input name="departement" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('departement') }}</div>
                    @else
                    <input name="departement" type="text" class="form-control" value="{{ $user->departement }}">
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Code d'imputation</label>
                <div class="col-sm-9">
                    @if ($errors->has('code_imputation'))
                    <input name="code_imputation" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('code_imputation') }}</div>
                    @else
                    <input name="code_imputation" type="text" class="form-control" value="{{ $user->code_imputation }}">
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Code d'etablissement</label>
                <div class="col-sm-9">
                    @if ($errors->has('code_etablissement'))
                    <input name="code_etablissement" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('code_etablissement') }}</div>
                    @else
                    <input name="code_etablissement" type="text" class="form-control" value="{{ $user->code_etablissement }}">
                    @endif
                </div>
            </div>
        @endcomponent


        @component('components.card')

            <h3 class="font-weight-bold mb-4">Préférences</h3>
            <div class="form-group row">
                <label class="col-form-label col-sm-3">Type de Transmission du voiture</label>
                <div class="form-group col-sm-6">
                    <select name="car_transmission" class="form-control">
                        <option value="automatic">Automatic</option>
                        <option value="manuel">Manuel</option>
                    </select>
                </div>
                @if ($errors->has('car_transmission'))
                <p class="text-danger">{{ $errors->first('car_transmission') }}</p>
                @endif
            </div>

            <div class="form-group row">
                <label class="col-form-label col-sm-3">Type de Carburant du voiture</label>
                <div class="form-group col-sm-6">
                    <select name="car_carburant" class="form-control">
                        <option value="gazoil">Gazoile</option>
                        <option value="escence">Escence</option>
                    </select>
                </div>
                @if ($errors->has('car_carburant'))
                <p class="text-danger">{{ $errors->first('car_carburant') }}</p>
                @endif
            </div>
            
            <div class="form-group row">
                <label class="col-form-label col-sm-3">Siège d'aviation</label>
                <div class="form-group col-sm-6">
                    <select name="flight_seat" class="form-control">
                        <option value="hublot">hublot</option>
                        <option value="couloir">couloir</option>
                    </select>
                </div>
                @if ($errors->has('flight_seat'))
                <p class="text-danger">{{ $errors->first('flight_seat') }}</p>
                @endif
            </div>
        @endcomponent
        <button class="btn btn-lg btn-primary float-right" type="submit">Enregistrer</button>
    </form>
@endsection