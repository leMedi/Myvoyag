@extends('layouts.sidemenu')

@section('menu')
    @include('admin.menu')
@endsection

@section('main')
     <div class="row mb-3">
        <div class="col-8 col-xl-10">
            <h1 class="h2">{{ $site->name }}</h1>
        </div>
        <div class="col-4 col-xl-2">
            <div class="btn-group">
                <button onClick="redirect('{{ url('/sites') }}/edit/{{ $site->id }}')" class="btn btn-secondary" type="button">
                    Modifier
                </button>

                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>

                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" data-toggle="modal" data-target="#deleteSiteModal" type="button">Supprimer</button>
                </div>
            </div>
        </div>
    </div> <!-- .row -->

    @component('components.card')
        <h3>Informations</h3>
        <dl class="d-flex py-2 m-2 border-bottom">
            <dt class="w-25">Nom</dt>
            <dd>{{ $site->name }}</dd>
        </dl>
        <dl class="d-flex py-2 m-2 border-bottom">
            <dt class="w-25">Pays</dt>
            <dd>{{ $site->country }}</dd>
        </dl>
        <dl class="d-flex py-2 m-2 border-bottom">
            <dt class="w-25">Ville</dt>
            <dd>{{ $site->city }}</dd>
        </dl>
        <dl class="d-flex py-2 m-2">
            <dt class="w-25">Address</dt>
            <dd>{{ $site->address }}</dd>
        </dl>
    @endcomponent
    
    <div  id="deleteSiteModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-3">
                    <h4 class="msg text-center">
                        Voulez vous vraiment supprimer le Site<br>
                        <b>{{ $site->name }}</b>.
                    </h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ url('/sites') }}/{{ $site->id }}" method="POST" class="m-0">
                        {{ csrf_field() }}                        
                        <input type="hidden" name="_method" value="delete"/>
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-8 col-xl-10">
            <h1 class="h2">Listes des Hotels</h1>
        </div>
        <div class="col-4 col-xl-2">
        </div>
    </div> <!-- .row -->
    <div id="table">

    <table class="c-table">
        <thead>
            <tr class="c-table__row">
                <th class="c-table__cell c-table__cell--head">Nom</th>
                <th class="c-table__cell c-table__cell--head">Address</th>
                <th class="c-table__cell c-table__cell--head">Contact</th>
                <th class="c-table__cell c-table__cell--head">Etoiles</th>
                <th class="c-table__cell c-table__cell--head">Prix</th>
                <th class="c-table__cell c-table__cell--head">Distance</th>
            </tr>
        </thead>

        <tbody id="hotels" class="table-clickable">
            @foreach ($hotels as $hotel)
                <tr class="c-table__row" data-id="{{ $hotel->id }}">
                    <td class="c-table__cell">{{ $hotel->name }}</td>
                    <td class="c-table__cell">{{ $hotel->city }}, {{ $hotel->country }}
                        <small class="d-block text-primary">
                            <a href="https://www.google.com/maps/search/?api=1&query=">gmaps</a>
                        </small>
                    </td>
                    <td class="c-table__cell">{{ $hotel->tel }}</td>
                    <td class="c-table__cell">{{ $hotel->rating }}</td>
                    <td class="c-table__cell">
                        {{ $hotel->price }} $
                        @if ($hotel->with_food)
                        <small class="d-block text-success">Avec Restauration</small>
                        @else
                        <small class="d-block text-danger">Sans Restauration</small>
                        @endif
                    </td>
                    <td class="c-table__cell">{{ $hotel->distance }} KM</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
    </div> <!-- #table -->

@endsection