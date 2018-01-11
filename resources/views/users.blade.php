@extends('layouts.master')

@section('body')

<div class="container" id="table">
    <div class="row mb-2">
        <div class="col-sm-12 mt-4">
            <table class="c-table">
                <thead>
                    <tr class="c-table__row">
                      <th class="c-table__cell c-table__cell--head">Personne</th>
                      <th class="c-table__cell c-table__cell--head">Deadline</th>
                      <th class="c-table__cell c-table__cell--head">Leader + Team</th>
                      <th class="c-table__cell c-table__cell--head">Budget</th>
                      <th class="c-table__cell c-table__cell--head">Status</th>
                      <th class="c-table__cell c-table__cell--head">
                          <span class="u-hidden-visually">Actions</span>
                      </th>
                    </tr>
                </thead>
                <?php foreach ($users as $user):?>
    echo $user->firstName;}?>
                <tbody>
                    <tr class="c-table__row c-table__row--danger">
                        <td class="c-table__cell">New Dashboard
                            <small class="d-block text-muted">Google</small>
                        </td>

                        <td class="c-table__cell">17th Oct, 17
                            <small class="d-block text-danger">Overdue</small>
                        </td>

                        <td class="c-table__cell">
                            <div class="d-block">
                                <div class="float-left u-mr-xsmall">
                                    <div>
                                        <img class="c-avatar__img" src="https://zawiastudio.com/dashboard/demo/img/avatar1-72.jpg" alt="Adam's Face">
                                    </div>
                                </div>
                                <div class="o-media__body">
                                    Norman Hammond<small class="d-block text-muted">UK Design Team</small>
                                </div>
                            </div>
                        </td>

                        <td class="c-table__cell">$4,670
                            <small class="d-block text-muted">Paid</small>
                        </td>

                        <td class="c-table__cell">
                            <i class="fa fa-circle-o u-color-info u-mr-xsmall"></i>Early Stages
                        </td>

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
            </table>
        </div>
    </div>
   
</div>
    
@endsection