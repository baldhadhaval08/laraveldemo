@extends('layouts.auth')

@section('content')
    <section id="wrapper" class="new-login-register">
        <div class="lg-info-panel" style="background: url('images/PanchayatGuru.jpeg') no-repeat center center / cover !important ; ">
            <div class="inner-panel">
                
                <div class="lg-content">
                    <h2>Laravel Demo/h2>
                </div>
            </div>
        </div>
        <div class="new-login-box">
            <div class="white-box">
                <h3 class="box-title m-b-0">Reset Password</h3>
                
                
                {{ Form::open(['route' => 'password.email','method' => 'post','class'=>"form-horizontal new-lg-formform", 'id'=>"loginform"]) }}
                    @csrf

                    <div class="form-group  m-t-20">
                        <div class="col-xs-12">
                            <label>Email Address</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    
                    
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Send</button>
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
