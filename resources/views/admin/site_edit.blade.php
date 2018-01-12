@extends('layouts.sidemenu')

@section('menu')
    @include('admin.menu')
@endsection

@section('main')
     <div class="row mb-3">
        <div class="col-8 col-xl-10">
            <h1 class="h2">Modifier le Site: {{ $site->name }}</h1>
        </div>
        <div class="col-4 col-xl-2">
        </div>
    </div> <!-- .row -->

    @component('components.card')
        <h3>Informations</h3>
        <form action="{{ url('sites/') }}/{{ $site->id }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    @if ($errors->has('name'))
                    <input name="name" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    @else
                    <input name="name" type="text" class="form-control" value="{{ $site->name }}">
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
                    <input name="country" type="text" class="form-control" value="{{ $site->country }}">
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
                    <input name="city" type="text" class="form-control" value="{{ $site->city }}">
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
                    <input name="address" type="text" class="form-control" value="{{ $site->address }}">
                    @endif
                </div>
            </div>

            <button class="btn btn-primary float-right" type="submit">Enregistrer</button>
        </form>
    @endcomponent
    
@endsection