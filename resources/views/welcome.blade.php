@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid jumbotron-main"><script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
    <div id="particles-js">
	<canvas class="particles-js-canvas-el" width="1409" height="319" style="width: 100%; height: 100%;"></canvas>
	</div>
        <div class="container center-vertically-holder" style="margin-top:-20px;">
            <div class="row center-vertically">
                <div class="col-md-8 offset-sm-0 offset-md-2 text-center" style="margin-top:100px;margin-bottom:100px;">
                    <h1>My first php app to demonstrate user login and registration with php<br><br></h1>
                    <hr style="border-top:1px;color:rgba(255,255,255,0.9);width:60%;margin:0px;margin-top:-50px;margin-bottom:10px;margin-left:20%;">
                    <p>To use the app, create an account to register and login with your registration details.</p>
                    <p><a class="btn btn-primary" role="button" href="#">Register</a></p>
                </div>
            </div>
        </div>
    </div>
    @endsection