@extends('layouts.admin.layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Usuario Egresado</h1>
  <p class="mb-4"> A continuación encontrará los datos personales del usuario seleccionado </p>

  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-12">

      <!-- Area Chart -->
      <div class="card shadow mb-8">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Información personal</h6>
        </div>

        <div>

          <div class="card-body">


            <form action="" method="POST">
              <div class="row">
                <div class="col form-group">
                  <label for="pillInput">Cedula o DNI</label>
                  <input type="text" class="form-control input-pill" id="dni" placeholder="{{$user->dni}}" disabled>
                </div>

                <div class="col form-group">
                  <label for="email">Direccion de Correo</label>
                  <input type="email" class="form-control input-pill" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$user->email}}" disabled>
                </div>

              </div>

              <div class="row">
                <div class="col form-group">
                  <label for="pillInput">Nombres</label>
                  <input type="text" class="form-control input-pill" id="primerNombre" placeholder="{{$user->name}}" disabled>
                </div>
                <div class="col form-group">
                  <label for="pillInput">Apellidos</label>
                  <input type="text" class="form-control input-pill" id="primerApellido" placeholder="{{$user->lastname}}" disabled>
                </div>
              </div>

              <div class="row">
                <div class="col form-group">
                  <label for="direccion">Telefono</label>
                  <input type="text" class="form-control input-pill" id="direccion" placeholder="{{$user->phone}}" disabled>
                </div>
                <div class="col form-group">
                  <label for="direccion">Direccion Fisica</label>
                  <input type="text" class="form-control input-pill" id="direccion" value="{{$user->address}}" disabled>
                </div>
              </div>

            </form>

          </div>

          <div class="row" align="center">

            <div class="col"></div>

            <div class="col">
              <form action="{{route('admin.egresados.destroy', $user->id)}}" method="POST" class="float-left">
                @csrf
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger float-left" style="margin-bottom: 30px"><i class="fas fa-trash"></i> Eliminar Usuario Egresado</button>
              </form>

            </div>
            <div class="col"></div>
          </div>

        </div>
      </div>


    </div>
  </div>

</div>
<!-- end main content -->

@endsection