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
                <div class="card-header"> Buscar amigos </div>

                <div class="card-body">
                    <p> A continuación encontrarás la lista de los Egresados UTP </p>
                    <p> Da click en "Agregar amigo" para agregar un nuevo amigo a tu círculo de amigos. </p>


                </div>
            </div>


            @foreach($egresados as $egresado)

            <div class="card" style="margin-top: 30px;">
                <div class="card-header">
                    <span>
                        {{ $egresado->name }}
                    </span>

                </div>

                <div class="card-body container">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            {{ $egresado->lastname }}
                        </div>
                        <div class="col-3">
                            {{ $egresado->egreso }}
                        </div>
                        
                        <div class="col-3">
                        <img src="{{ $egresado->mediapath }}" width="40%">
                        </div>


                        <div class="col-3">



                            <form action="{{route('egresado.friends.store', auth()->id() )}}" method="POST">
                                @csrf
                                {{method_field('POST')}}


                                <div class="row" hidden>
                                    <div class="col form-group" hidden>
                                        <input id="id" type="text" class="form-control input-pill @error('text') is-invalid @enderror" name="id" value="{{ $egresado->id }}" hidden>
                                    </div>

                                </div>

                                <div align="center">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-flag"></i> Agregar amigo </button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection