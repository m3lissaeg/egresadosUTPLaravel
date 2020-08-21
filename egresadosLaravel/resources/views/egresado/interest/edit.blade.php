@extends('layouts.egresado.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Tus intereses </div>

                <div class="card-body">
                    <p> A continuación encontrarás los intereses disponibles. Selecciona uno de ellos y escribelo en el espacio proporcionado</p>

                </div>
            </div>



            <div class="card" style="margin-top: 30px;">
                <div class="card-header">
                    <span> Intereses disponibles: </span>
                </div>
                <p style="margin: 30px;"> {{ implode(', ' , $tags->pluck('name')->toArray() ) }} </p>

                <form action="{{route('egresado.interest.update', auth()->id() ) }}" method="POST" style="margin: 30px;">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="col form-group">
                        <label> Interes </label>
                        <input type="text" class="form-control input-pill" name="interest" id="interest" placeholder="Ingresa tu interes">
                    </div>

                    <div align="center">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-flag"></i> Guardar Cambios </button>
                    </div>

                </form>

                <div class="card" style="margin-top: 30px;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection