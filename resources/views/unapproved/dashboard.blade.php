@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Unapproved Dashboard</a></li>
                    <li class="active">Unapproved Dashboard</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
         <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    Please contact administrator to approve your account.
                </div>
            </div>
        </div>
    </div>
@endsection