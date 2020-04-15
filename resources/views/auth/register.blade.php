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
        <div class="new-login-box register-box">
            <div class="white-box">
                <h3 class="box-title m-b-0">Register</h3>
                <form method="POST" action="{{ route('register') }}" class="form-horizontal new-lg-form">
                    @csrf

                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Name</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autofocus>
                            @if ($errors->has('name'))
                                <span class="error-message" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Email</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">
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
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >
                             @if ($errors->has('password'))
                                <span class="error-message" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            @if ($errors->has('password'))
                            <span class="error-message" role="alert">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Register</button>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <a href="{{ route('login') }}" id="to-recover" class="text-dark pull-right"><i class="fa fa-user m-r-5"></i> Login </a> </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
