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


            <form action="{{route('superadmin.profile.update', $user)}}" method="POST">
              @csrf
              {{method_field('PUT')}}
              <div class="row">

                <div class="col form-group">
                  <label>Correo electrónico</label>
                  <input id="email" type="email" class="form-control input-pill @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email" autofocus>

                </div>

                <div class="col form-group" hidden>
                  <label>Name</label hidden>
                  <input id="name" type="name" class="form-control input-pill @error('name') is-invalid @enderror" name="name" placeholder="superadmin" required autocomplete="name" autofocus hidden>

                </div hidden>

              </div>

              <div class="row">
                <div class="col form-group">
                  <label for="password"> Contraseña</label>
                  <input id="password" type="password" class="form-control input-pill @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>
                <!-- <div class="col form-group">
                  <label for="password">Confirmar Contraseña</label>
                  <input id="password" type="password" class="form-control input-pill @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                </div> -->

              </div>

              <button type="submit" class="btn btn-primary"> Guardar Cambios</button>
            </form>

          </div>

          <div align="center">

          </div>

        </div>
      </div>


    </div>

  </div>

</div>
<!-- end main content -->

@endsection