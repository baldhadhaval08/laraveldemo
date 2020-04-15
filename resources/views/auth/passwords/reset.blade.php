@extends('layouts.auth')

@section('content')
    <section id="wrapper" class="new-login-register">
        <div class="lg-info-panel" style="background: url('images/PanchayatGuru.jpeg') no-repeat center center / cover !important ; ">
            <div class="inner-panel">
                
                <div class="lg-content">
                    <h2>Laravel Demo/h2>
                </div>
                <?php
                    //DB::table('password_resets')->where('token', '=', $data->token )->delete();
                ?>
            </div>
        </div>
        <div class="new-login-box">
            <div class="white-box">
                <h3 class="box-title m-b-0">Reset Password</h3>
                
                
                <form method="POST" action="{{ route('password.update',[$data->token]) }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $data->token }}">
                    <div class="form-group  m-t-20">
                        <div class="col-xs-12">
                            <label>Email Address</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $data->email }}" disabled required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group  m-t-20">
                        <div class="col-xs-12">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group  m-t-20">
                        <div class="col-xs-12">
                            <label>Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="" required>
                        </div>
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Reset Password</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="{{ route('login') }}" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Login</a> </div>
                    </div>
                </form>
            </div>
        </div>


    </section>
@endsection
