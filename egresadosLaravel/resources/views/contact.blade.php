@extends('layouts.home.layout')

@section('content')

<div class="container-fluid gtco-banner-area">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-6" id="contact">
                <h4> Contactanos </h4>
                <input type="text" class="form-control" placeholder="Full Name">
                <input type="email" class="form-control" placeholder="Email Address">
                <textarea class="form-control" placeholder="Message"></textarea>
                <a href="#" class="submit-button"> Enviar <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
            
        </div>   
    </div>   
</div>   
@endsection