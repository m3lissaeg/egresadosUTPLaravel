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
                <div class="card-header">Las noticias más importantes de esta semana </div>

                <div class="card-body">
                    <p> A continuación encontrarás las noticias según los intereses que indiques en las casillas a continuación</p>
                    <p> Da click en el título de cada noticia para leer su contenido</p>


                </div>
            </div>


            @foreach($news as $new)

            <div class="card" style="margin-top: 30px;">
                <div class="card-header"> 
                    <a href=" {{ route('egresado.news.show', $new->id) }}">
                        {{ $new->title }}
                    </a>
                    
                </div>
                
                <div class="card-body container">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            {{ $new->abst }}
                        </div>
                        <div class="col-6">
                            {{ $new->body }}
                        </div>
                    </div>
                    
                </div>

                <div class="card" style="margin-top: 30px;">
                    <span class="badge badge-primary"> {{ implode(', ' , $new->tags->pluck('name')->toArray() ) }} </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection