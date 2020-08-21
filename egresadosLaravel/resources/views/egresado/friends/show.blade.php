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
                <div class="card-header">Este es tu círculo de amigos</div>

                <div class="card-body">
                    <p> A continuación encontrarás la lista de los amigos que has agregado a tu círculo de amigos </p>
                    <p> Para agregar más amigos ve a la sección "Buscar amigos"</p>


                </div>
            </div>


            @foreach($arrayAmigos as $amigo)

            <div class="card" style="margin-top: 30px;">
                <div class="card-header">
                    <span>
                        {{ $amigo->name }}
                    </span>

                </div>

                <div class="card-body container">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            {{ $amigo->lastname }}
                        </div>
                        <div class="col-3">
                            {{ $amigo->egreso }}
                        </div>

                        <div class="col-3">
                            <img src="{{ $amigo->mediapath }}" width="40%">
                        </div>

                        <div class="col-3">



                            <form action="{{route('egresado.friends.destroy', $amigo->id )}}" method="POST">
                                @csrf
                                {{method_field('DELETE')}}


                                <div class="row" hidden>
                                    <div class="col form-group" hidden>
                                        <input id="id" type="text" class="form-control input-pill @error('text') is-invalid @enderror" name="id" value="{{ $amigo->id }}" hidden>
                                    </div>

                                </div>

                                <div align="center">
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-flag"></i> Eliminar amigo </button>
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