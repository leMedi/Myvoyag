@extends('layouts.sidemenu')

@section('main')
    <div class="row mb-3">
        <div class="col-8 col-xl-10">
            <h1 class="h2">Ajouter un utilisateur:</h1>
        </div>
        <div class="col-4 col-xl-2">
        </div>
    </div> <!-- .row -->

    
    @component('components.card')
        <form action="/users" method="POST">
            {{ csrf_field() }}

            <div class="form-group row ">
                <div class="col-sm-6">
                    <label class="col-form-label">Prenom</label>
                    @if ($errors->has('firstName'))
                    <input name="firstName" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('firstName') }}</div>
                    @else
                    <input name="firstName" type="text" class="form-control">
                    @endif
                </div>
                <div class="col-sm-6">
                    <label class="col-form-label">Nom</label>
                    @if ($errors->has('lastName'))
                    <input name="lastName" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('lastName') }}</div>
                    @else
                    <input name="lastName" type="text" class="form-control">
                    @endif
                </div>
            </div>
        
            <div class="form-group row mb-4">
                <div class="col-sm-4 ">
                    <label class="col-form-label">email</label>
                    @if ($errors->has('email'))
                    <input name="email" type="text" class="form-control is-invalid" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @else
                    <input name="email" type="text" class="form-control" placeholder="example@gmail.com">
                    @endif
                </div>
                
                <div class="form-group col-sm-4">
                    <label class="col-form-label">Type d'utilisateur</label>
                    <select name="type" class="form-control" id="type">
                        <option value="">--Type--</option>
                        <option value="salarier">salarier</option>
                        <option value="responsable">responsable</option>
                        <option value="gestionnaire">gestionnaire</option>
                        <option value="directeur">directeur</option>
                        <option value="admin">admin</option>
                    </select>
                </div>

                <div class="form-group col-sm-4">
                    <label class="col-form-label">Responsable</label>
                    <select name="responsable" id="respondable" class="form-control"></select>
                </div>
            </div> 
            <div class="form-group row mb-4">  
                <div class="col-sm-6">
                    <label class="col-form-label">Mot de Passe</label>
                    <input name="password" type="password" class="form-control" placeholder="XXX XXX X">
                </div>

                <div class="col-sm-6">
                    <label class="col-form-label"> Comfirmer password</label>
                    <input name="password_confirmation" type="password" class="form-control" placeholder="XXX XXX X">
                </div>
            </div>
            <div class="row">
                <div class="col align-self-center">
                    <h4 class="text-center text-danger">{{ $errors->first("password") }}</h4>
                </div>
                <button class="btn btn-lg btn-primary float-right" type="submit">Enregistrer</button>
            </div>
        </form>
    @endcomponent




@section('scripts')

<script>
    $('#type').on('change',function(){

        var x = document.getElementById('type').value;

        var url= '';

        if( x == 'responsable')
            url = "{{url('/useradd/listResponsable/')}}";
        else if( x == 'directeur')
            url = "{{url('/useradd/listDirecteur/')}}";
        else
            return false;

        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'json',
            success: function (data) {
                console.log(data[0]['id']);
                for(i=0; i< data.length; i++)
                $('#respondable').append("<option value=" + data[i]['id'] + ">" + data[i]['firstName'] + " " + data[i]['lastName'] + "</option>");
                
            }
        });
    });

    


</script>
                
@endsection

@endsection