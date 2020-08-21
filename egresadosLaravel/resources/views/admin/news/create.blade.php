@extends('layouts.admin.layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Crear una nueva Noticia</h1>
    <p class="mb-4"> Los campos que encontrarás a continuación son requeridos. Para guardar la noticia, haz click en el botón "Publicar"
        En el campo "Resumen" agrega un pequeño párrafo que le dé una idea a tus lectores de qué se tratará la nueva Noticia.
    </p>

    <!-- Area Chart -->
    <div class="card shadow mb-10">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Creación de una nueva Noticia</h6>
        </div>

        <div>

            <div class="card-body">


                <form action="{{route('admin.news.store')}}" method="POST">
                @csrf
                    {{method_field('POST')}}
                    <div class="col form-group">
                        <label> Título </label>
                        <input type="text" class="form-control input-pill" name="title" id="title"  required>
                    </div>

                    <div class="col form-group">
                        <label> Resumen </label>
                        <input type="text" class="form-control input-pill" name="abst" id="abst"  required>
                    </div>



                    <div class="col form-group">
                        <label> Contenido </label>
                        <textarea name="body" class="form-control input-pill" id="body" rows="10" cols="40">  </textarea>

                    </div>


                    <div class="row">
                        <div class="col form-group">
                            <label> Contenido multimedia</label>
                            <input type="text" class="form-control input-pill" name="mediapath" id="mediapath"  required>
                        </div>
                        
                        
                        <div class="col form-group">
                            <label> Intereses </label>
                            @foreach($tags as $tag)
                            <div class="form-check">
                                <input type="checkbox"   name="tags[{{ $tag->id }}]" >
                                <label for=""> {{$tag->name}}</label>
                            </div>
                            @endforeach
    
                        </div>

                    </div>

                    <div align="center">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-flag"></i> Guardar Noticia </button>

                    </div>

                </form>

            </div>


        </div>
    </div>




</div>
<!-- end main content -->

@endsection