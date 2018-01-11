@extends('layouts.master')

@section('body')

<div class="container" id="table">
    <div class="row mb-2">
        <div class="col-sm-12 mt-4">
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
                        <tr class="c-table__row c-table__row--danger">
                            <td class="c-table__cell">
                                <div class="d-block">
                                    <div class="float-left u-mr-xsmall">
                                        <div>
                                            <img class="c-avatar__img" src="https://zawiastudio.com/dashboard/demo/img/avatar1-72.jpg" alt="Adam's Face">
                                        </div>
                                    </div>
                                    <div class="o-media__body">
                                        {{$user->firstName}} {{$user->lastName}}<small class="d-block text-muted">{{$user->type}}</small>
                                    </div>
                                </div>
                            </td>
                            <td class="c-table__cell">{{$user->email}} </td>

                            <td class="c-table__cell">{{$user->tel}}</td>

                            <td class="c-table__cell">{{$user->departement}} </td>

                            <td class="c-table__cell">{{$user->numPass}}</td>

                            <td class="c-table__cell ">
                                    <div class="dropdown">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">Edit Profile</button>
                                        <button class="dropdown-item" type="button">View Activity</button>
                                        <button class="dropdown-item" type="button">Manage Roles</button>
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
    
@endsection