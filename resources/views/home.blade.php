@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row" style="text-align: center;border-width: 50px;">
            <div class="col-md-12" style="border-width: 50px;padding: 0px;"><img class="rounded-circle" style="height: 50px;height: 200px;width: 200px;" src="{{ asset('/img/user-photo2.jpg') }}"></div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-12" style="padding: 68px;">
                <div class="caption">
                    <h5><a href="#"><i class="fa fa-user fa-fw"></i>&nbsp;{{ Auth::user()->firstname }}</a></h5>
                    <p class="text-nowrap text-muted"> <i class="fa fa-envelope fa-fw"></i> Email:{{ Auth::user()->email }}</p><a class="btn btn-primary" role="button" href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i>&nbsp;logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card text-center" style="width: 800;"></div>
@endsection
