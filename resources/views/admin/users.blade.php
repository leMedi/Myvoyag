@extends('layouts.master')

@section('body')

<div class="container" id="table">
    <div class="row mt-3">
        <div class="col-8 col-xl-10">
            <h2 class="h2">Liste des Utilisateurs:</h2>
        </div>
        <div class="col-4 col-xl-2">
            <a href="{{url('/useradd')}}" class="btn btn-secondary float-right">Ajouter un Utilisateur</a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-sm-12 mt-2">
            <table class="c-table">
                <thead>
                    <tr class="c-table__row">
                      <th class="c-table__cell c-table__cell--head">Personne</th>
                      <th class="c-table__cell c-table__cell--head">Email</th>
                      <th class="c-table__cell c-table__cell--head">Tel</th>
                      <th class="c-table__cell c-table__cell--head">Departement</th>
                      <th class="c-table__cell c-table__cell--head">N°Passport</th>
                      <th class="c-table__cell c-table__cell--head">
                          <span class="u-hidden-visually">Actions</span>
                      </th>
                    </tr>
                </thead>
                @foreach($users as $user)
                    <tbody>
                        <tr data-id="{{ $user->id }}" class="c-table__row {{($user->tel == "") ? 'c-table__row--danger' : ''}}">
                            <td class="c-table__cell">
                                <div class="d-block">
                                    <div class="float-left u-mr-xsmall">
                                        <div>
                                            <img class="c-avatar__img" src="/uploads/avatars/{{ $user->avatar }}">
                                        </div>
                                    </div>
                                    <div class="o-media__body">
                                        {{$user->firstName}} {{$user->lastName}}<small class="d-block text-muted">{{$user->type}}</small>
                                    </div>
                                </div>
                            </td>
                            <td class="c-table__cell">{{$user->email}} </td>

                            <td class="c-table__cell" >{{$user->tel}}</td>

                            <td class="c-table__cell">{{$user->departement}} </td>

                            <td class="c-table__cell">{{$user->passport}}</td>

                            <td class="c-table__cell ">
                                <div class="btn-group">
                                    <button onClick="redirect('{{ url('/users') }}/edit/{{ $user->id }}')" class="btn btn-secondary" type="button">
                                        Modifier
                                    </button>
        
                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
        
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" data-id="{{ $user->id }}" data-nom="{{ $user->lastName }}" data-prenom="{{ $user->firstName }}" data-toggle="modal" data-target="#deleteUserModal" type="button">Supprimer</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
   
</div>

<div  id="deleteUserModal" class="modal" tabindex="-1" role="dialog">
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

@section('scripts')

<script>
    $('#table tr').click(function (e){
        // e.preventDefault();
        //event.stopPropagation();
        $this = $(this);

        id = $this.data('id');
        if($this.hasClass( 'c-table__row--danger' ))
            return false;
    
        location.href = "{{ url('/users') }}/" + id;
    });

    $deleteModal = $('#deleteUserModal');
    $('#table tr button').on('click', function (e){
        event.stopPropagation();
        $this = $(this);
        if($this.data('toggle') == 'dropdown')
            $this.next().toggle();
        else if($this.data('toggle') == 'modal'){
            console.log($this);
            let nom   = $this.data('nom'); // Extract info from data-* attributes
            let prenom   = $this.data('prenom'); // Extract info from data-* attributes
            let userID     = $this.data('id'); // Extract info from data-* attributes

            $deleteModal.find('.modal-body .msg').html("Voulez vous vraiment supprimer l'utilisateur<br><b>" + prenom + " " + nom + "</b>.");
            $deleteModal.find('.modal-footer form').attr('action', "{{ url('/users') }}/" + userID);

            $deleteModal.modal('show');
        }
    });
    


    
</script>
    
@endsection
    
@endsection

