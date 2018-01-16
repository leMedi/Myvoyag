@extends('layouts.master')

@section('body')
<div class="container pt-5 push-bottom">
    @component('components.card')
        <nav class="nav nav-pills nav-fill">
            <a class="nav-item nav-link" href="{{ url('/demande/new/') }}/{{$demande->id}}/step1"><h4 class="m-0">Infomation</h4></a>
            <a class="nav-item nav-link" href="{{ url('/demande/new/') }}/{{$demande->id}}/step2"><h4 class="m-0">Vol</h4></a>
            <a class="nav-item nav-link" href="{{ url('/demande/new/') }}/{{$demande->id}}/step3"><h4 class="m-0">Hebergement</h4></a>
            <a class="nav-item nav-link active" href="{{ url('/demande/new') }}/{{$demande->id}}/step4"><h4 class="m-0">Transport</h4></a>
        </nav>
    @endcomponent
    
    @component('components.card')
        <h4 class="mb-4">De <b>{{ $demande->departureSite->name }}</b> Vers <b>{{ $demande->fight_departure_start_airport }}</b> aéroport </h4>
        <form method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label-lg">Lieu de Livraison</label>
            <div class="col-sm-10">
                @if ($errors->has('s_lieu_livraison'))
                <input name="s_lieu_livraison" value="{{ old('s_lieu_livraison', $demande->departureSite->name) }}" type="text" class="form-control form-control-lg is-invalid">
                <div class="invalid-feedback">{{ $errors->first('s_lieu_livraison') }}</div>
                @else
                <input name="s_lieu_livraison" value="{{ old('s_lieu_livraison', $demande->departureSite->name) }}" type="text" class="form-control form-control-lg">
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label-lg">Heure de Livraison</label>
            <div class="col-sm-10">
                <?php
                    $h = Carbon\Carbon::createFromFormat('H:i:s', $demande->fight_departure_start_time);
                    $h = $h->subHour()->subMinutes(30);
                ?>
                @if ($errors->has('s_heure_livraison'))
                <input name="s_heure_livraison" value="{{ old('s_heure_livraison', $h->toTimeString()) }}" type="time" class="form-control form-control-lg is-invalid">
                <div class="invalid-feedback">{{ $errors->first('s_heure_livraison') }}</div>
                @else
                <input name="s_heure_livraison" value="{{ old('s_heure_livraison', $h->toTimeString()) }}" type="time" class="form-control form-control-lg">
                @endif
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-sm-2 col-form-label-lg">Lieu de Restitution</label>
            <div class="col-sm-10">
                @if ($errors->has('s_lieu_restitution'))
                <input name="s_lieu_restitution" value="{{ old('s_lieu_restitution', $demande->fight_departure_start_airport . ' aéroport') }}" type="text" class="form-control form-control-lg is-invalid">
                <div class="invalid-feedback">{{ $errors->first('s_lieu_restitution') }}</div>
                @else
                <input name="s_lieu_restitution" value="{{ old('s_lieu_restitution', $demande->fight_departure_start_airport . ' aéroport') }}" type="text" class="form-control form-control-lg">
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label-lg">Heure de Restitution</label>
            <div class="col-sm-10">
                @if ($errors->has('s_heure_restitution'))
                <input name="s_heure_restitution" value="{{ old('s_heure_restitution', $demande->fight_departure_start_time) }}" type="time" class="form-control form-control-lg is-invalid">
                <div class="invalid-feedback">{{ $errors->first('s_heure_restitution') }}</div>
                @else
                <input name="s_heure_restitution" value="{{ old('s_heure_restitution', $demande->fight_departure_start_time) }}" type="time" class="form-control form-control-lg">
                @endif
            </div>
        </div>
    @endcomponent

    @component('components.card')
        <h4 class="mb-4">De <b>{{ $demande->fight_departure_end_airport }}</b> aéroport</h4>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label-lg">Lieu de Livraison</label>
            <div class="col-sm-10">
                @if ($errors->has('e_lieu_livraison'))
                <input name="e_lieu_livraison" value="{{ old('e_lieu_livraison', $demande->fight_departure_end_airport . ' aéroport') }}" type="text" class="form-control form-control-lg is-invalid">
                <div class="invalid-feedback">{{ $errors->first('e_lieu_livraison') }}</div>
                @else
                <input name="e_lieu_livraison" value="{{ old('e_lieu_livraison', $demande->fight_departure_end_airport . ' aéroport') }}" type="text" class="form-control form-control-lg">
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label-lg">Heure de Livraison</label>
            <div class="col-sm-10">
                @if ($errors->has('e_heure_livraison'))
                <input name="e_heure_livraison" value="{{ old('e_heure_livraison', $demande->fight_departure_end_time) }}" type="time" class="form-control form-control-lg is-invalid">
                <div class="invalid-feedback">{{ $errors->first('e_heure_livraison') }}</div>
                @else
                <input name="e_heure_livraison" value="{{ old('e_heure_livraison', $demande->fight_departure_end_time) }}" type="time" class="form-control form-control-lg">
                @endif
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-sm-2 col-form-label-lg">Lieu de Restitution</label>
            <div class="col-sm-10">
                @if ($errors->has('e_lieu_restitution'))
                <input name="e_lieu_restitution" value="{{ old('e_lieu_restitution', $demande->fight_departure_end_airport . ' aéroport') }}" type="text" class="form-control form-control-lg is-invalid">
                <div class="invalid-feedback">{{ $errors->first('e_lieu_restitution') }}</div>
                @else
                <input name="e_lieu_restitution" value="{{ old('e_lieu_restitution', $demande->fight_departure_end_airport . ' aéroport') }}" type="text" class="form-control form-control-lg">
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label-lg">Date de Restitution</label>
            <div class="col-sm-10">
                @if ($errors->has('e_heure_restitution'))
                <input name="e_heure_restitution" value="{{ old('e_heure_restitution', $demande->fight_return_start_time) }}" type="time" class="form-control form-control-lg is-invalid">
                <div class="invalid-feedback">{{ $errors->first('e_heure_restitution') }}</div>
                @else
                <input name="e_heure_restitution" value="{{ old('date_restitution', $demande->fight_return_start_time) }}" type="time" class="form-control form-control-lg">
                @endif
            </div>
        </div>
    @endcomponent

    @component('components.card')
        <h4 class="mb-4">De <b>{{ $demande->fight_departure_start_airport }}</b> airport Vers <b>{{ $demande->departureSite->name }}</b></h4>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label-lg">Lieu de Livraison</label>
            <div class="col-sm-10">
                @if ($errors->has('a_lieu_livraison'))
                <input name="a_lieu_livraison" value="{{ old('a_lieu_livraison', $demande->fight_departure_start_airport . ' aéroport') }}" type="text" class="form-control form-control-lg is-invalid">
                <div class="invalid-feedback">{{ $errors->first('a_lieu_livraison') }}</div>
                @else
                <input name="a_lieu_livraison" value="{{ old('a_lieu_livraison', $demande->fight_departure_start_airport . ' aéroport') }}" type="text" class="form-control form-control-lg">
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label-lg">Heure de Livraison</label>
            <div class="col-sm-10">
                @if ($errors->has('a_heure_livraison'))
                <input name="a_heure_livraison" value="{{ old('a_heure_livraison', $demande->fight_return_end_time) }}" type="time" class="form-control form-control-lg is-invalid">
                <div class="invalid-feedback">{{ $errors->first('a_heure_livraison') }}</div>
                @else
                <input name="a_heure_livraison" value="{{ old('a_heure_livraison', $demande->fight_return_end_time) }}" type="time" class="form-control form-control-lg">
                @endif
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-sm-2 col-form-label-lg">Lieu de Restitution</label>
            <div class="col-sm-10">
                @if ($errors->has('a_lieu_restitution'))
                <input name="a_lieu_restitution" value="{{ old('a_lieu_restitution', $demande->departureSite->name) }}" type="text" class="form-control form-control-lg is-invalid">
                <div class="invalid-feedback">{{ $errors->first('a_lieu_restitution') }}</div>
                @else
                <input name="a_lieu_restitution" value="{{ old('a_lieu_restitution', $demande->departureSite->name) }}" type="text" class="form-control form-control-lg">
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label-lg">Date de Restitution</label>
            <div class="col-sm-10">
                <?php
                    $h = Carbon\Carbon::createFromFormat('H:i:s', $demande->fight_return_end_time);
                    $h = $h->subHour()->subMinutes(30);
                ?>
                @if ($errors->has('a_heure_restitution'))
                <input name="a_heure_restitution" value="{{ old('a_heure_restitution', $h->toTimeString()) }}" type="time" class="form-control form-control-lg is-invalid">
                <div class="invalid-feedback">{{ $errors->first('a_heure_restitution') }}</div>
                @else
                <input name="a_heure_restitution" value="{{ old('a_heure_restitution', $h->toTimeString()) }}" type="time" class="form-control form-control-lg">
                @endif
            </div>
        </div>
    @endcomponent
            
    @component('components.card')
        <button class="form-control btn btn-lg btn-primary m-0" type="submit">Enregister</button>
    @endcomponent
    </form>
</div>
@endsection

@section('scripts')
    <script>
        // First, checks if it isn't implemented yet.
        if (!String.prototype.format) {
            String.prototype.format = function() {
                var args = arguments;
                return this.replace(/{(\d+)}/g, function(match, number) { 
                return typeof args[number] != 'undefined'
                    ? args[number]
                    : match
                ;
                });
            };
        }

    </script>
@endsection
