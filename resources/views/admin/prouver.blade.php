@extends('layouts.master')

@section('body')

<div class="container" id="table">
    <div class="row mt-3">
        <div class="col-8 col-xl-10">
            <h2 class="h2">Liste des demandes à Prouver:</h2>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-sm-12 mt-2">
            <table class="c-table">
                <thead>
                    <tr class="c-table__row">
                        <th class="c-table__cell c-table__cell--head">Ville Destination</th>
                        <th class="c-table__cell c-table__cell--head">Site Destinantion</th>
                        <th class="c-table__cell c-table__cell--head">Ville Depart</th>
                        <th class="c-table__cell c-table__cell--head">Site Depart</th>
                        <th class="c-table__cell c-table__cell--head">Date d'aller</th>
                        <th class="c-table__cell c-table__cell--head">Date de retour</th>
                        <th class="c-table__cell c-table__cell--head"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="c-table__row">
                        
                        <td class="c-table__cell">Paris</td>
                        
                        <td class="c-table__cell">Jacobs Paris</td>
                        
                        <td class="c-table__cell">Casablanca</td>
                        
                        <td class="c-table__cell">Jcobs Casablanca</td>

                        <td class="c-table__cell">05/06/2018</td>

                        <td class="c-table__cell" >05/08/2018</td>

                        <td class="c-table__cell ">
                            <div class="btn-group">
                                    Action
                                </button>
    
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
    
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"  href="/">Accepter</a>
                                    <a class="dropdown-item"  href="/">Supprimer</a>
                                    
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="c-table__row">
                        
                        <td class="c-table__cell">Paris</td>
                        
                        <td class="c-table__cell">Jacobs Paris</td>
                        
                        <td class="c-table__cell">Casablanca</td>
                        
                        <td class="c-table__cell">Jcobs Casablanca</td>

                        <td class="c-table__cell">05/06/2018</td>

                        <td class="c-table__cell" >05/08/2018</td>

                        <td class="c-table__cell ">
                            <div class="btn-group">
                                    Action
                                </button>

                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"  href="/">Accepter</a>
                                    <a class="dropdown-item"  href="/">Supprimer</a>
                                    
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="c-table__row">
                        
                        <td class="c-table__cell">Paris</td>
                        
                        <td class="c-table__cell">Jacobs Paris</td>
                        
                        <td class="c-table__cell">Casablanca</td>
                        
                        <td class="c-table__cell">Jcobs Casablanca</td>

                        <td class="c-table__cell">05/06/2018</td>

                        <td class="c-table__cell" >05/08/2018</td>

                        <td class="c-table__cell ">
                            <div class="btn-group">
                                    Action
                                </button>
    
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
    
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"  href="/">Accepter</a>
                                    <a class="dropdown-item"  href="/">Supprimer</a>
                                    
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="c-table__row">
                        
                        <td class="c-table__cell">Paris</td>
                        
                        <td class="c-table__cell">Jacobs Paris</td>
                        
                        <td class="c-table__cell">Casablanca</td>
                        
                        <td class="c-table__cell">Jcobs Casablanca</td>

                        <td class="c-table__cell">05/06/2018</td>

                        <td class="c-table__cell" >05/08/2018</td>

                        <td class="c-table__cell ">
                            <div class="btn-group">
                                    Action
                                </button>
    
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
    
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"  href="/">Accepter</a>
                                    <a class="dropdown-item"  href="/">Supprimer</a>
                                    
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="c-table__row">
                        
                        <td class="c-table__cell">Paris</td>
                        
                        <td class="c-table__cell">Jacobs Paris</td>
                        
                        <td class="c-table__cell">Casablanca</td>
                        
                        <td class="c-table__cell">Jcobs Casablanca</td>

                        <td class="c-table__cell">05/06/2018</td>

                        <td class="c-table__cell" >05/08/2018</td>

                        <td class="c-table__cell ">
                            <div class="btn-group">
                                    Action
                                </button>
    
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
    
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"  href="/">Accepter</a>
                                    <a class="dropdown-item"  href="/">Supprimer</a>
                                    
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

