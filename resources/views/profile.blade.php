@extends('layouts.master')

@section('body')
<div class="container pt-5 push-bottom">
    <div class="row">
        <div class="col-md-8">
            <div class="row mb-3">
                <div class="col-8 col-xl-10">
                    <h1 class="h2">Profile</h1>
                </div>
                <div class="col-4 col-xl-2">
                    <a href="#" class="btn btn-secondary float-right">Modifier</a>
                </div>
            </div>

            @component('components.card')
                <h4 class="font-weight-bold mb-3">General Info</h4>
                <dl class="d-flex py-2 m-2 border-bottom">
                    <dt class="w-25">Name</dt>
                    <dd>Edgar Kennedy</dd>
                </dl>
                <dl class="d-flex py-2 m-2 border-bottom">
                    <dt class="w-25">Email</dt>
                    <dd>edgar.kennedy@dashboard.com</dd>
                </dl>
                <dl class="d-flex py-2 m-2 border-bottom">
                    <dt class="w-25">Birth day</dt>
                    <dd>10/10/1980</dd>
                </dl>
                <dl class="d-flex py-2 m-2">
                    <dt class="w-25">Country</dt>
                    <dd>London, United Kingdom</dd>
                </dl>
            @endcomponent

            @component('components.card')
                <h4 class="font-weight-bold mb-3">Jacobs Info</h4>
                <dl class="d-flex py-2 m-2 border-bottom">
                    <dt class="w-25">Déparetement</dt>
                    <dd>Marketing</dd>
                </dl>
                <dl class="d-flex py-2 m-2 border-bottom">
                    <dt class="w-25">Email</dt>
                    <dd class="w-75">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius ex amet necessitatibus exercitationem ratione iste expedita sunt animi fuga, enim assumenda maxime cumque, asperiores placeat adipisci sequi culpa ad eveniet.</dd>
                </dl>
                <dl class="d-flex py-2 m-2 border-bottom">
                    <dt class="w-25">Birth day</dt>
                    <dd>10/10/1980</dd>
                </dl>
                <dl class="d-flex py-2 m-2">
                    <dt class="w-25">Country</dt>
                    <dd>London, United Kingdom</dd>
                </dl>
            @endcomponent

            @component('components.card', [
                'border' => 'danger'
            ])
                <h4 class="font-weight-bold mb-3">Password</h4>
                <p>Remplire les Champs pour chnager le Mot de Pass.</p>
                <form class="overflow-hidden mb-2">
                    <div class="form-group row border-bottom pb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Ancient</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="Ancient Mot de Pass">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nouveau</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="Nouveau Mot de Pass">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Confimer</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Confirmer le Mot de Pass">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-danger mt-2 float-right">Changer le Mot de Pass</button>
                </form>
            @endcomponent
            </div> <!-- .col -->
            
            <div class="col-md-4">
            @component('components.card')
                <div class="text-center">
                    <img class="avatar rounded-circle d-block w-50 mx-auto mb-3" src="https://zawiastudio.com/dashboard/demo/img/avatar-150.jpg" alt="">
                    <button class="d-inline btn btn-primary">Change Picture</button>
                </div>
            @endcomponent
            <div class="px-2">
                <h4 class="font-weight-bold mb-3">FAQ</h4>
                <ul class="dry-list">
                    <li class="mb-2"><a class="text-dark" href="#">How can I connect my bank account?</a></li>
                    <li class="mb-2"><a class="text-dark" href="#">Why Dashboard doesn’t show any data?</a></li>
                    <li class="mb-2"><a class="text-dark" href="#">If I change my avatar in one version will it appears in next version?</a></li>
                </ul>
                <a href="#">Visit FAQ Page</a>
            </div>
        </div> <!-- .col -->
    </div> <!-- .row -->
</div> <!-- .container -->
@endsection