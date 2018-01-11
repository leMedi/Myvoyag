@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body"> <?php  $noHeader = true ?>
@extends('layouts.master')

@section('body')

<div class="container-fluid" id="login">
    <div class="row">
        <div class="col-md-8 px-0">

            <div class="full-height bg" style= "background-image: url({{ asset('imgs/login.jpg') }})" >
                <div class="img-caption">
                    <h1 class="caption-title">We make spectacular</h1>
                    <p class="caption-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 px-0" >
            <div class="full-height  bg-white height-100 ">
                <div class="vertical-align full-height pdd-horizon-70">
                    <div class="table-cell">
                        <div class="pdd-horizon-15">
                            <h2>Login</h2>
                            <p class="mrg-btm-15 font-size-13 text-muted">Please enter your user name and password to login</p>
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control" placeholder="User name" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="checkbox font-size-12">
                                    <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="text-muted">Keep Me Signed In</label>
                                </div>
                                <button type="submit" class="btn btn-primary px-5 mt-3">Login</button>
                            </form>
                        </div>
                    </div>              
                </div>
                <div class="login-footer">
                    <img class="img-responsive inline-block pdd-top-10" src="{{ asset('imgs/logo-jacobs.png') }}" width="100" alt="">
                    <span class="font-size-13 float-right pdd-top-10">Don't have an account? <a href="">Sign Up Now</a></span>
                </div>              
            </div>
        </div>      
    </div>
</div>
@endsection
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
