@extends('layouts.master')

@section('body')
    <div class="container pt-5 push-bottom">
        <div class="row">
            <div class="col-md-2">
                @yield('menu')
            </div> <!-- .col -->

            <div class="col-md-10">
                @yield("main")
            </div> <!-- .col -->
        </div>
    </div>
@endsection