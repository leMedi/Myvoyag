@extends('layouts.sidemenu')

@section('menu')
    @include('admin.menu')
@endsection

@section('main')
     <div class="row mb-3">
        <div class="col-8 col-xl-10">
            <h1 class="h2">Modifier l'hotel: {{ $hotel->name }}</h1>
        </div>
        <div class="col-4 col-xl-2">
        </div>
    </div> <!-- .row -->

    @component('components.card')
        <h3>Informations</h3>
        <form action="{{ url('hotels/') }}/{{ $hotel->id }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    @if ($errors->has('name'))
                    <input name="name" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    @else
                    <input name="name" type="text" class="form-control" value="{{ $hotel->name }}">
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Contact</label>
                <div class="col-sm-10">
                    @if ($errors->has('tel'))
                    <input name="tel" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('tel') }}</div>
                    @else
                    <input name="tel" type="text" class="form-control" value="{{ $hotel->tel }}">
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Etoiles</label>
                <div class="col-sm-10">
                    @if ($errors->has('rating'))
                    <input name="rating" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('rating') }}</div>
                    @else
                    <input name="rating" type="text" class="form-control" value="{{ $hotel->rating }}">
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pays</label>
                <div class="col-sm-10">
                    @if ($errors->has('country'))
                    <input name="country" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('country') }}</div>
                    @else
                    <input name="country" type="text" class="form-control" value="{{ $hotel->country }}">
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ville</label>
                <div class="col-sm-10">
                    @if ($errors->has('city'))
                    <input name="city" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('city') }}</div>
                    @else
                    <input name="city" type="text" class="form-control" value="{{ $hotel->city }}">
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    @if ($errors->has('address'))
                    <input name="address" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('address') }}</div>
                    @else
                    <input name="address" type="text" class="form-control" value="{{ $hotel->address }}">
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Prix Chambre</label>
                <div class="col-sm-10">
                    @if ($errors->has('price'))
                    <input name="price" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                    @else
                    <input name="price" type="text" class="form-control" value="{{ $hotel->price }}">
                    @endif
                </div>
            </div>

            

            <div class="form-group row">
                <label class="col-md-2 col-form-label">Site</label>
                
                <div class="col-sm-6">

                    <select name="site_id" class="form-control"> 
                        @foreach($sites as $site)
                            <option value="{{ $site->id }}">{{$site->name}}</option>
                        @endforeach
                    </select>

                </div>
            </div> <!-- .form-group -->

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Distance</label>
                <div class="col-sm-10">
                    @if ($errors->has('distance'))
                    <input name="distance" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('distance') }}</div>
                    @else
                    <input name="distance" type="text" class="form-control" value="{{ $hotel->distance }}">
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Option</label>
                <div class="col-sm-10 pt-2 pl-5">
                    <input name="with_food" class="form-check-input" type="checkbox" {{ old('with_food', $hotel->with_food) ? 'checked' : '' }}>
                    <label class="form-check-label">
                    Avec Restauration
                    </label>
                </div>
            </div>

            <button class="btn btn-primary float-right" type="submit">Enregistrer</button>
        </form>
    @endcomponent
    
@endsection