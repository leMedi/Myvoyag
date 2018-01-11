@extends('layouts.sidemenu')

@section('menu')
    @include('admin.menu')
@endsection

@section('main')
    @component('components.card')
        <h3>Ajouter Un Hotel</h3>
        <form action="{{ url('/sites') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Nom</label>
                    @if ($errors->has('name'))
                    <input name="name" value="{{ old('name') }}"  type="text" class="form-control is-invalid" placeholder="Hotel Farah">
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    @else
                    <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Jacobs Site">
                    @endif
                </div> <!-- .form-group -->
                <div class="form-group col-md-4">
                    <label>Pays</label>
                    @if ($errors->has('country'))
                    <input name="country" value="{{ old('country') }}" type="text" class="form-control is-invalid" placeholder="France">
                    <div class="invalid-feedback">{{ $errors->first('country') }}</div>
                    @else
                    <input name="country" value="{{ old('country') }}" type="text" class="form-control" placeholder="France">
                    @endif
                </div> <!-- .form-group -->
                <div class="form-group col-md-4">
                    <label>Ville</label>
                    @if ($errors->has('city'))
                    <input name="city" value="{{ old('city') }}" type="text" class="form-control is-invalid" placeholder="Paris">
                    <div class="invalid-feedback">{{ $errors->first('city') }}</div>
                    @else
                    <input name="city" value="{{ old('city') }}" type="text" class="form-control" placeholder="Paris">
                    @endif
                </div> <!-- .form-group -->
            </div> <!-- .from-row -->
            <div class="form-row">
                <div class="form-group col-md-9">
                    <label>Address</label>
                    @if ($errors->has('address'))
                    <input name="address" value="{{ old('address') }}" type="text" class="form-control is-invalid" placeholder="lorem ipisum dolum">
                    <div class="invalid-feedback">{{ $errors->first('address') }}</div>
                    @else
                    <input name="address" value="{{ old('address') }}" type="text" class="form-control" placeholder="lorem ipisum dolum">
                    @endif
                </div> <!-- .form-group -->
                <div class="col-md-3 pt-1">
                    <button class="form-control btn btn-primary mt-4" type="submit">Ajouter</button>
                </div> <!-- .form-group -->
            </div> <!-- .from-row -->
        </form>
    @endcomponent


    <div class="row mb-3">
        <div class="col-8 col-xl-10">
            <h1 class="h2">Listes des Sites</h1>
        </div>
        <div class="col-4 col-xl-2">
        </div>
    </div> <!-- .row -->
    <div id="table">

    <table class="c-table">
        <thead>
            <tr class="c-table__row">
                <th class="c-table__cell c-table__cell--head">Nom</th>
                <th class="c-table__cell c-table__cell--head">Pays</th>
                <th class="c-table__cell c-table__cell--head">Ville</th>
                <th class="c-table__cell c-table__cell--head">Addresse</th>
                <th class="c-table__cell c-table__cell--head">
                    <span class="u-hidden-visually">Actions</span>
                </th>
            </tr>
        </thead>

        <tbody id="sites" class="table-clickable">
            @foreach ($sites as $site)
                <tr class="c-table__row" data-id="{{ $site->id }}">
                    <td class="c-table__cell">{{ $site->name }}</td>
                    <td class="c-table__cell">{{ $site->country }}
                        <small class="d-block text-primary">
                            <a href="https://www.google.com/maps/search/?api=1&query=">gmaps</a>
                        </small>
                    </td>
                    <td class="c-table__cell">{{ $site->city }}</td>
                    <td class="c-table__cell">{{ $site->address }}</td>
                    <td class="c-table__cell ">
                        <div class="btn-group">
                            <button onClick="redirect('{{ url('/sites') }}/edit/{{ $site->id }}')" class="btn btn-secondary" type="button">
                                Modifier
                            </button>

                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button">Modifier</button>
                                <button class="dropdown-item" data-id="{{ $site->id }}" data-name="{{ $site->name }}" data-toggle="modal" data-target="#deleteSiteModal" type="button">Supprimer</button>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
    </div> <!-- #table -->
    
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
                    <h4 class="msg text-center"></h4>
                </div>
                <div class="modal-footer">
                    <form action="" method="POST" class="m-0">
                        {{ csrf_field() }}                        
                        <input type="hidden" name="_method" value="delete"/>
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')

<script>
    $('#sites tr').click(function (e){
        // e.preventDefault();
        event.stopPropagation();
        $this = $(this);

        id = $this.data('id');

        location.href = "{{ url('/sites') }}/" + id;
    });

    $('#deleteSiteModal').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget); // Button that triggered the modal
        let siteName = button.data('name'); // Extract info from data-* attributes
        let siteID = button.data('id'); // Extract info from data-* attributes

        let modal = $(this)
        modal.find('.modal-body .msg').html("Voulez vous vraiment supprimer le Site<br><b>'" + siteName + "'</b>.");
        modal.find('.modal-footer form').attr('action', "{{ url('/sites') }}/" + siteID);
    });
</script>
    
@endsection