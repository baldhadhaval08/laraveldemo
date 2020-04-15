@extends('layouts.auth')

@section('content')
    <section id="wrapper" class="new-login-register">
        <div class="lg-info-panel">
            <div class="inner-panel">
                
                <div class="lg-content">
                    <h2>Laravel Demo</h2>
                </div>
            </div>
        </div>
        <div class="new-login-box">
            <div class="white-box">
                <h3 class="box-title m-b-0">Sign In</h3>
                <small>Enter your details below</small>
                <form class="form-horizontal new-lg-form" id="loginform" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group  m-t-20">
                        <div class="col-xs-12">
                            <label>Email Address</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="error-message" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="{{ route('register') }}" id="to-recover" class="text-dark pull-right"><i class="fa fa-user m-r-5"></i> Create a new account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
