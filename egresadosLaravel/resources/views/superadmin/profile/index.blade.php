@extends('layouts.superusuario.layout')


@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Perfil de Super Administrador</h1>
  <p class="mb-4"> A continuación encontrarás tus datos personales y las opciones correspondientes para modificarlos. </p>

  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-12">

      <!-- Area Chart -->
      <div class="card shadow mb-12">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Información personal</h6>
        </div>

        <div>

          <div class="card-body">


            <form action="" method="POST">
              <div class="row">

                <div class="col form-group">
                <label>Correo electrónico</label>
												<input id="email" type="email" class="form-control input-pill @error('email') is-invalid @enderror" name="email" value="{{$user->email}} " style="color:black"  autofocus disabled>
                  
                </div>

              </div>

              <div class="row">
                <div class="col form-group">
                  <label for="password"> Contraseña</label>
                  <input id="password" type="password" class="form-control input-pill @error('password') is-invalid @enderror" name="password" style="color:black" disabled >
                </div>
              </div>

            </form>

          </div>

          <div align="center">
            <!-- Boton redirige a la vista edit -->

            <a href="{{ route('superadmin.profile.edit', $user->id) }}" class="btn btn-primary btn-icon-split" style="margin-bottom: 20px;">
              <span class="icon text-white-50">
                <i class="fa fa-edit"></i>
              </span>
              <span class="text">Modificar información personal</span>
            </a>

          </div>

        </div>
      </div>


    </div>

  </div>

</div>
<!-- end main content -->

@endsection