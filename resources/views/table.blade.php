@extends('layouts.master')

@section('body')

<div class="container" id="table">
    <div class="row mb-2">
        <div class="col-sm-12 mt-4">
            <table class="c-table">
                <thead>
                    <tr class="c-table__row">
                      <th class="c-table__cell c-table__cell--head">Project</th>
                      <th class="c-table__cell c-table__cell--head">Deadline</th>
                      <th class="c-table__cell c-table__cell--head">Leader + Team</th>
                      <th class="c-table__cell c-table__cell--head">Budget</th>
                      <th class="c-table__cell c-table__cell--head">Status</th>
                      <th class="c-table__cell c-table__cell--head">
                          <span class="u-hidden-visually">Actions</span>
                      </th>
                    </tr>
                </thead>

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

                    <tr class="c-table__row">
                        <td class="c-table__cell">Landing Page
                            <small class="d-block text-muted">Airbnb</small>
                        </td>

                        <td class="c-table__cell">2nd Jan, 18
                            <small class="d-block text-muted">in 3 months</small>
                        </td>

                        <td class="c-table__cell">
                            <div class="d-block">
                                <div class="float-left u-mr-xsmall">
                                    <div>
                                        <img class="c-avatar__img" src="https://zawiastudio.com/dashboard/demo/img/avatar2-72.jpg" alt="Adam's Face">
                                    </div>
                                </div>
                                <div class="o-media__body">
                                    Joseph Mullins<small class="d-block text-muted">External Company</small>
                                </div>
                            </div>
                        </td>

                        <td class="c-table__cell">$5,740
                            <small class="d-block text-muted">Invoice Sent</small>
                        </td>

                        <td class="c-table__cell">
                            <i class="fa fa-circle-o u-color-warning u-mr-xsmall"></i>QA
                        </td>

                        <td class="c-table__cell ">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                    <button class="dropdown-item" type="button">Edit Profile</button>
                                    <button class="dropdown-item" type="button">View Activity</button>
                                    <button class="dropdown-item" type="button">Manage Roles</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="c-table__row">
                        <td class="c-table__cell">Customer Care Interface
                            <small class="d-block text-muted">Uber</small>
                        </td>

                        <td class="c-table__cell">1st Apr, 18
                            <small class="d-block text-muted">in 5 months</small>
                        </td>

                        <td class="c-table__cell">
                            <div class="d-block">
                                <div class="float-left u-mr-xsmall">
                                    <div>
                                        <img class="c-avatar__img" src="https://zawiastudio.com/dashboard/demo/img/avatar3-72.jpg" alt="Adam's Face">
                                    </div>
                                </div>
                                <div class="o-media__body">
                                    Ina Higgins
                                <small class="d-block text-muted">UX Warriors</small>
                                </div>
                            </div>
                        </td>

                        <td class="c-table__cell">$4,000
                            <small class="d-block text-muted">Paid</small>
                        </td>

                        <td class="c-table__cell">
                            <i class="fa fa-circle-o u-color-primary u-mr-xsmall"></i>Waiting for Client
                        </td>

                        <td class="c-table__cell ">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu4">
                                    <button class="dropdown-item" type="button">Edit Profile</button>
                                    <button class="dropdown-item" type="button">View Activity</button>
                                    <button class="dropdown-item" type="button">Manage Roles</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="c-table__row c-table__row--danger">
                        <td class="c-table__cell">UX Consulting
                            <small class="d-block text-muted">Tapdaq</small>
                        </td>

                        <td class="c-table__cell">23th Dec, 18
                            <small class="d-block text-danger">Overdue</small>
                        </td>

                        <td class="c-table__cell">
                            <div class="d-block">
                                <div class="float-left u-mr-xsmall">
                                    <div>
                                        <img class="c-avatar__img" src="https://zawiastudio.com/dashboard/demo/img/avatar4-72.jpg" alt="Adam's Face">
                                    </div>
                                </div>
                                <div class="o-media__body">
                                    Stella Munoz
                                <small class="d-block text-muted">Dribbble Researchers</small>
                                </div>
                            </div>
                        </td>

                        <td class="c-table__cell">$2,500
                            <small class="d-block text-muted">Paid</small>
                        </td>

                        <td class="c-table__cell">
                            <i class="fa fa-circle-o u-color-success u-mr-xsmall"></i>Finishing
                        </td>

                        <td class="c-table__cell ">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu5">
                                    <button class="dropdown-item" type="button">Edit Profile</button>
                                    <button class="dropdown-item" type="button">View Activity</button>
                                    <button class="dropdown-item" type="button">Manage Roles</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="c-table__row">
                        <td class="c-table__cell">Mongo DB Integration
                            <small class="d-block text-muted">Twitter</small>
                        </td>

                        <td class="c-table__cell">10th Apr, 17
                            <small class="d-block text-muted">in 4 Months</small>
                        </td>

                        <td class="c-table__cell">
                            <div class="d-block">
                                <div class="float-left u-mr-xsmall">
                                    <div>
                                        <img class="c-avatar__img" src="https://zawiastudio.com/dashboard/demo/img/avatar5-72.jpg" alt="Adam's Face">
                                    </div>
                                </div>
                                <div class="o-media__body">
                                    Dylan Shelton
                                <small class="d-block text-muted">SF Dev Team</small>
                                </div>
                            </div>
                        </td>

                        <td class="c-table__cell">$800
                            <small class="d-block text-muted">Invoice Sent</small>
                        </td>

                        <td class="c-table__cell">
                            <i class="fa fa-circle-o u-color-info u-mr-xsmall"></i>Early Stages
                        </td>

                        <td class="c-table__cell ">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu6">
                                    <button class="dropdown-item" type="button">Edit Profile</button>
                                    <button class="dropdown-item" type="button">View Activity</button>
                                    <button class="dropdown-item" type="button">Manage Roles</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="c-table__row">
                        <td class="c-table__cell">Small Design Help
                            <small class="d-block text-muted">NASA</small>
                        </td>

                        <td class="c-table__cell">1st Mar, 18
                             <small class="d-block text-muted">in 6 Months</small>
                        </td>

                        <td class="c-table__cell">
                            <div class="d-block">
                                <div class="float-left u-mr-xsmall">
                                    <div>
                                        <img class="c-avatar__img" src="https://zawiastudio.com/dashboard/demo/img/avatar6-72.jpg" alt="Adam's Face">
                                    </div>
                                </div>
                                <div class="o-media__body">
                                    Ellen Santiago
                                <small class="d-block text-muted">UK Design Team</small>
                                </div>
                            </div>
                        </td>

                        <td class="c-table__cell">$2,180
                            <small class="d-block text-danger">Delayed</small>
                        </td>

                        <td class="c-table__cell">
                            <i class="fa fa-circle-o u-color-success u-mr-xsmall"></i>Finishing
                        </td>

                        <td class="c-table__cell ">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu7">
                                    <button class="dropdown-item" type="button">Edit Profile</button>
                                    <button class="dropdown-item" type="button">View Activity</button>
                                    <button class="dropdown-item" type="button">Manage Roles</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="c-table__row">
                        <td class="c-table__cell">Subpages
                            <small class="d-block text-muted">Facebook</small>
                        </td>

                        <td class="c-table__cell">1st Jan, 18
                             <small class="d-block text-muted">in 2 Months</small>
                        </td>

                        <td class="c-table__cell">
                            <div class="d-block">
                                <div class="float-left u-mr-xsmall">
                                    <div>
                                        <img class="c-avatar__img" src="https://zawiastudio.com/dashboard/demo/img/avatar7-72.jpg" alt="Adam's Face">
                                    </div>
                                </div>
                                <div class="o-media__body">
                                    Maurice Briggs
                                <small class="d-block text-muted">Moscow Office</small>
                                </div>
                            </div>
                        </td>

                        <td class="c-table__cell">
                            $4,670<small class="d-block text-muted">Invoice Sent</small>
                        </td>

                        <td class="c-table__cell">
                            <i class="fa fa-circle-o u-color-warning u-mr-xsmall"></i>Designing
                        </td>

                        <td class="c-table__cell ">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu8">
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