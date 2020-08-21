@extends('layouts.egresado.layout')

<!-- admin profile edit.blade -->
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Mi Perfil </h1>
  <p class="mb-4"> A continuación encontrará sus datos personales y las opciones correspondientes para modificarlos. </p>

  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-8 col-lg-7">

      <!-- Area Chart -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Información personal</h6>
        </div>

        <div>

          <div class="card-body">


            <form action= "{{route('egresado.profile.update', $userI->id )}}" method="POST">
              @csrf
              {{method_field('PUT')}}
              <div class="row">
                <div class="col form-group">
                  <label >Cedula o DNI</label>
                  <input name="dni" type="text" class="form-control input-pill" id="dni" value="{{$userI->dni}}">
                </div>

                <div class="col form-group">
                  <label >Direccion de Correo</label>
                  <input name="email" type="email" class="form-control input-pill" id="email" aria-describedby="emailHelp" value="{{$userI->email}}" autocomplete="email">
                </div>

              </div>

              <div class="row">
                <div class="col form-group">
                  <label >Nombres</label>
                  <input name="name" type="text" class="form-control input-pill" id="name" value="{{$userI->name}}">
                </div>
                <div class="col form-group">
                  <label >Apellidos</label>
                  <input name="lastname" type="text" class="form-control input-pill" id="lastname" value="{{$userI->lastname}}">
                </div>
              </div>

              <div class="row">
                <div class="col form-group">
                  <label >Telefono</label>
                  <input name="phone" type="text" class="form-control input-pill" id="phone" value="{{$userI->phone}}">
                </div>
                <div class="col form-group">
                  <label>Direccion Fisica</label>
                  <input name="address" type="text" class="form-control input-pill" id="address" value="{{$userI->address}}">
                </div>
              </div>

              <div class="row">
                <div class="col form-group">
                  <label >URL de Imagen  de perfil </label>
                  <input name="mediapath" type="text" class="form-control input-pill" id="mediapath" value="{{$userI->mediapath}}">
                </div>
              </div>

              <div class="row">
                <div class="col form-group">
                  <label for="password"> Contraseña</label>
                  <input id="password" type="password" class="form-control input-pill @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
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

    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">{{ $userI->name}} </h6>
        </div>


        <!-- Card Body -->
        <div class="card-body">
          <div class="imgPeople pt-4">

            <div align="center">

              <!-- Profile  Photo -->
              <img src="{{ $userI->mediapath}}" style="width:60%">



            </div>

          </div>




        </div>
      </div>
    </div>
  </div>

</div>
<!-- end main content -->

@endsection