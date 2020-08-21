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

            <div class="card-body">


                <form>
                    <div class="col form-group">
                        <label>  Título </label>
                        <input type="text" class="form-control input-pill"  name="title" id="title" value=" {{ $newsI->title}}" disabled>
                    </div>

                    <div class="col form-group">
                        <label> Resumen </label>
                        <input type="text" class="form-control input-pill" name="abst" id="abst" value=" {{ $newsI->abst}}" disabled>
                    </div>



                    <div class="col form-group">
                        <label> Contenido </label>
                        <textarea name="body" class="form-control input-pill"  id="body" rows="10" cols="40" disabled> {{ $newsI->body}} </textarea>

                    </div>
                    <div class="col form-group">
                        <label>  Contenido multimedia</label>
                        <input type="text" class="form-control input-pill"  name="mediapath" id="mediapath" value=" {{ $newsI->mediapath}}" disabled>
                        <img src="{{ $newsI->mediapath }}" width="60%">
                    </div>
                    
                    <div>
                        <label>  Intereses </label>
                        <input type="text" class="form-control input-pill"  name="mediapath" id="mediapath" value="{{ implode(' , ' ,$newsI->tags->pluck('name')->toArray() ) }}" disabled>
                    </div>


                    <div align="center">
                        <a href="{{route('admin.news.edit', $newsI->id )}}" class="btn btn-primary input-pill text-center">
                            Modificar Noticia
                        </a>
                    </div>
                </form>

            </div>


        </div>
    </div>




</div>
<!-- end main content -->

@endsection
