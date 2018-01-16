@extends('layouts.sidemenu')

@section('menu')
    @include('admin.menu')
@endsection

@section('main')
    @component('components.card')
        <h3>Ajouter Un Hotel</h3>
        <form action="{{ url('/hotels') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nom</label>
                    @if ($errors->has('name'))
                    <input name="name" value="{{ old('name') }}"  type="text" class="form-control is-invalid" placeholder="Hotel Farah">
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    @else
                    <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Hotel Farah">
                    @endif
                </div> <!-- .form-group -->
                <div class="form-group col-md-6">
                    <label>Contact</label>
                    @if ($errors->has('tel'))
                    <input name="tel" value="{{ old('tel') }}" type="number" class="form-control is-invalid" placeholder="+xxx-xxxxxxx">
                    <div class="invalid-feedback">{{ $errors->first('tel') }}</div>
                    @else
                    <input name="tel" value="{{ old('tel') }}" type="number" class="form-control" placeholder="+xxx-xxxxxxx">
                    @endif
                </div> <!-- .form-group -->
                
            </div> <!-- .from-row -->
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label>Pays</label>
                    @if ($errors->has('country'))
                    <input name="country" value="{{ old('country') }}" type="text" class="form-control is-invalid" placeholder="France">
                    <div class="invalid-feedback">{{ $errors->first('country') }}</div>
                    @else
                    <input name="country" value="{{ old('country') }}" type="text" class="form-control" placeholder="France">
                    @endif
                </div> <!-- .form-group -->
                <div class="form-group col-md-2">
                    <label>Ville</label>
                    @if ($errors->has('city'))
                    <input name="city" value="{{ old('city') }}" type="text" class="form-control is-invalid" placeholder="Paris">
                    <div class="invalid-feedback">{{ $errors->first('city') }}</div>
                    @else
                    <input name="city" value="{{ old('city') }}" type="text" class="form-control" placeholder="Paris">
                    @endif
                </div> <!-- .form-group -->
                <div class="form-group col-md-8">
                    <label>Address</label>
                    @if ($errors->has('address'))
                    <input name="address" value="{{ old('address') }}" type="text" class="form-control is-invalid" placeholder="lorem ipisum dolum">
                    <div class="invalid-feedback">{{ $errors->first('address') }}</div>
                    @else
                    <input name="address" value="{{ old('address') }}" type="text" class="form-control" placeholder="lorem ipisum dolum">
                    @endif
                </div> <!-- .form-group -->
            </div> <!-- .from-row -->

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Etoiles</label>
                    @if ($errors->has('rating'))
                    <input name="rating" value="{{ old('rating', 3) }}" type="number" class="form-control is-invalid" placeholder="0">
                    <div class="invalid-feedback">{{ $errors->first('rating') }}</div>
                    @else
                    <input name="rating" value="{{ old('rating', 3) }}" type="number" class="form-control" placeholder="0">
                    @endif
                </div> <!-- .form-group -->

                <div class="form-group col-md-4">
                    <label>Prix Chambre</label>
                    @if ($errors->has('price'))
                    <input name="price" value="{{ old('price') }}" type="number" class="form-control is-invalid" placeholder="30">
                    <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                    @else
                    <input name="price" value="{{ old('price') }}" type="number" class="form-control" placeholder="30">
                    @endif
                </div> <!-- .form-group -->

                <div class="form-group col-md-3 offset-md-1">
                    <label>Options</label>
                    <div class="form-check mt-1 ml-3">
                        <input name="with_food" class="form-check-input" type="checkbox" {{ old('with_food') ? 'checked' : '' }}>
                        <label class="form-check-label">
                        Avec Restauration
                        </label>
                    </div> <!-- .form-check -->
                </div> <!-- .form-group -->

               
            </div> <!-- .from-row -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Site</label>
                    <select name="site_id" class="form-control">  
                        @foreach($sites as $site)
                            <option value="{{ $site->id }}">{{$site->name}}</option>
                        @endforeach
                    </select>
                </div> <!-- .form-group -->

                <div class="form-group col-md-4">
                    <label>Distance</label>
                    @if ($errors->has('distance'))
                    <input name="distance" value="{{ old('distance') }}" type="text" class="form-control is-invalid" >
                    <div class="invalid-feedback">{{ $errors->first('distance') }}</div>
                    @else
                    <input name="distance" value="{{ old('distance') }}" type="text" class="form-control" >
                    @endif
                </div> <!-- .form-group -->
                <div class="col-md-3 pb-1 ml-5 mt-1">
                        <button class="form-control btn btn-primary mt-4" type="submit">Ajouter</button>
                    </div> <!-- .form-group -->
            </div> <!-- .from-row -->
        </form>
    @endcomponent


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
                <th class="c-table__cell c-table__cell--head">
                    <span class="u-hidden-visually">Actions</span>
                </th>
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
                    <td class="c-table__cell ">
                        <div class="btn-group">
                            <button onClick="redirect('{{ url('/hotels') }}/edit/{{ $hotel->id }}')" class="btn btn-secondary" type="button">
                                Modifier
                            </button>

                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" data-id="{{ $hotel->id }}" data-name="{{ $hotel->name }}" data-toggle="modal" data-target="#deleteHotelModal" type="button">Supprimer</button>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
    </div> <!-- #table -->
    
    <div  id="deleteHotelModal" class="modal" tabindex="-1" role="dialog">
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
    $('#hotels tr').click(function (e){
        // e.preventDefault();
        //event.stopPropagation();
        $this = $(this);

        id = $this.data('id');
        console.log(id);
        location.href = "{{ url('/hotels') }}/" + id;
    });

    $deleteModal = $('#deleteHotelModal');
    $('#hotels tr button').on('click', function (e){
        event.stopPropagation();
        $this = $(this);
        if($this.data('toggle') == 'dropdown')
            $this.next().toggle();
        else if($this.data('toggle') == 'modal'){

            let hotelName   = $this.data('name'); // Extract info from data-* attributes
            let hotelID     = $this.data('id'); // Extract info from data-* attributes

            $deleteModal.find('.modal-body .msg').html("Voulez vous vraiment supprimer l'hotel<br><b>'" + hotelName + "'</b>.");
            $deleteModal.find('.modal-footer form').attr('action', "{{ url('/hotels') }}/" + hotelID);

            $deleteModal.modal('show');
        }
    });
</script>
    
@endsection