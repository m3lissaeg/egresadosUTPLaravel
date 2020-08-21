@extends('layouts.admin.layout')

@section('scripts')

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>


<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

@endsection





@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Mis Publicaciones</h1>
  <p class="mb-4"> A continuación encontrarás tu lista de publicaciones realizadas </p>

  <div class="card-body">
    <a href="{{route('admin.news.create'  )}}" class="btn btn-warning ">
      <i class="fas fa-file"></i> 
      Crear nueva publicación
    </a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Título</th>
              <th> Resumen</th>
              <th>Cuerpo </th>
              <th> Multimedia </th>
              <th> Interes </th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Título</th>
              <th> Resumen</th>
              <th>Cuerpo </th>
              <th> Multimedia </th>
              <th> Interes </th>
              <th>Acciones</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($adminNews as $news)
            <tr>
              <td>{{$news->title}}</td>
              <td>{{$news->abst}}</td>
              <td>{{$news->body}}</td>
              <td>{{$news->mediapath}}</td>
              <td>{{implode(' , ' ,$news->tags->pluck('name')->toArray() )}}</td>
              <td>
                <a href="{{route('admin.news.show', $news->id )}}" class="btn btn-success btn-circle">
                  <i class="fas fa-eye"></i>
                </a>

                <form action="{{route('admin.news.destroy', $news->id) }}" method="POST" class="float-left">
                  @csrf
                  {{method_field('DELETE')}}
                  <button type="submit" class="btn btn-danger btn-circle float-left"><i class="fas fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

@endsection