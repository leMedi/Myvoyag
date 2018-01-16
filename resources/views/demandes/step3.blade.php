@extends('layouts.master')

@section('body')
<div class="container pt-5 push-bottom">
    @component('components.card')
        <nav class="nav nav-pills nav-fill">
            <a class="nav-item nav-link disabled" href="{{ url('/demande/new') }}/{{$demande->id}}/step1"><h4 class="m-0">Infomation</h4></a>
            <a class="nav-item nav-link disabled" href="{{ url('/demande/new') }}/{{$demande->id}}/step2"><h4 class="m-0">Vol</h4></a>
            <a class="nav-item nav-link active" href="{{ url('/demande/new') }}/{{$demande->id}}/step3"><h4 class="m-0">Hebergement</h4></a>
            <a class="nav-item nav-link disabled" href="#"><h4 class="m-0">Transport</h4></a>
        </nav>
    @endcomponent
    
    @component('components.card')
        <h2 class="font-weight-bold mb-4">Hebergement</h2>
        <form action="" method="POST">
            {{ csrf_field() }}
            <label class="col-form-label-lg">Hotel</label>
            <div class="form-row">
                <div class="col-8">
                    <select id="flight-from" class="form-control form-control-lg">
                        @foreach ($hotels as $hotel)
                        <option value="{{ $hotel->id }}" >{{ $hotel->name }} ({{ $hotel->city }}, {{ $hotel->country }})</option>
                        @endforeach
                    </select>
                    @if ($errors->has('hotel'))
                    <p class="text-danger">{{ $errors->first('subjet') }}</p>
                    @endif
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-lg form-control">Suivant</button>
                </div>
            </div>
        </form>
    @endcomponent
</div>
@endsection