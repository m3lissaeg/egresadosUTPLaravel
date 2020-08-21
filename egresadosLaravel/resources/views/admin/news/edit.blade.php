@extends('layouts.admin.layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"> Visualiza y/o modifica la noticia que has publicado anteriormente </h1>
    <p class="mb-4">
        Esta es tu noticia :
    </p>

    <!-- Area Chart -->
    <div class="card shadow mb-10">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Noticia</h6>
        </div>

        <div>

            <div class="card-body col-12">

                <form action="{{route('admin.news.update', $newsI->id) }}" method="POST" >
                    @csrf
                    {{method_field('PUT')}}
                    <div class="col form-group">
                        <label> Título </label>
                        <input type="text" class="form-control input-pill" name="title" id="title" value=" {{ $newsI->title}}">
                    </div>

                    <div class="col form-group">
                        <label> Resumen </label>
                        <input type="text" class="form-control input-pill" name="abst" id="abst" value=" {{ $newsI->abst}}">
                    </div>



                    <div class="col form-group">
                        <label> Contenido </label>
                        <textarea name="body" class="form-control input-pill" id="body" rows="10" cols="40"> {{ $newsI->body}} </textarea>

                    </div>


                    <div class="row">
                        <div class="col form-group">
                            <label> Contenido multimedia</label>
                            <input type="text" class="form-control input-pill" name="mediapath" id="mediapath" value=" {{ $newsI->mediapath}}">
                        </div>
                        
                        
                        <div class="col form-group">
                            <label> Intereses </label>
                            @foreach($tags as $tag)
                            <div class="form-check">
                                <input type="checkbox" name="tags[]" value="{{$tag->id}}" @if ($newsI->tags->pluck('id')->contains($tag->id)) checked @endif >
                                <label for=""> {{$tag->name}}</label>
                            </div>
                            @endforeach
    
                        </div>

                    </div>

                    <div align="center">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-flag"></i> Guardar Cambios </button>
                    </div>

                </form>

            </div>


        </div>
    </div>




</div>
<!-- end main content -->

@endsection