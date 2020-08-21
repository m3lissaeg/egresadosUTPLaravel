@extends('layouts.admin.layout')

<!-- admin profile edit.blade -->
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Perfil de Administrador</h1>
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


            <form action= "{{route('admin.profile.update', auth()->id() )}}" method="POST" id="adminprofileform" name="adminprofileform">
              @csrf
              {{method_field('PUT')}}
              <div class="row">
                <div class="col form-group">
                  <label >Cedula o DNI</label>
                  <input name="dni" type="text" class="form-control input-pill @error('dni') is-invalid @enderror" id="dni" value="{{auth()->user()->dni}}">
                  @error('dni')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="col form-group">
                  <label >Direccion de Correo</label>
                  <input name="email" type="email" class="form-control input-pill @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" value="{{auth()->user()->email}}" autocomplete="email">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>

              </div>

              <div class="row">
                <div class="col form-group">
                  <label >Nombres</label>
                  <input name="name" type="text" class="form-control input-pill @error('name') is-invalid @enderror" id="name" value="{{auth()->user()->name}}">
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col form-group">
                  <label >Apellidos</label>
                  <input name="lastname" type="text" class="form-control input-pill @error('lastname') is-invalid @enderror" id="lastname" value="{{auth()->user()->lastname}}">
                  @error('lastname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>

              <div class="row">
                <div class="col form-group">
                  <label >Telefono</label>
                  <input name="phone" type="text" class="form-control input-pill @error('phone') is-invalid @enderror" id="phone" value="{{auth()->user()->phone}}">
                  @error('phone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                </div>
                <div class="col form-group">
                  <label>Direccion Fisica</label>
                  <input name="address" type="text" class="form-control input-pill @error('address') is-invalid @enderror" id="address" value="{{auth()->user()->address}}">
                  @error('address')
                      <span class="invalid-feedback" role="alert">
                          <strong><small>{{ $message }}</small></strong>
                      </span>
                  @enderror
                </div>
              </div>

              <div class="row">
                <div class="col form-group">
                  <label for="password"> Contraseña</label>
                  <input id="password" type="password" class="form-control input-pill @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col form-group">
                  <label for="password_confirmation">Confirmar Contraseña</label>
                  <input id="password_confirmation" type="password" class="form-control input-pill @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">
                  @error('password_confirmation')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
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
          <h6 class="m-0 font-weight-bold text-primary">{{ auth()->user()->name}} </h6>
        </div>


        <!-- Card Body -->
        <div class="card-body">
          <div class="imgPeople pt-4">

            <div align="center">

              <!-- Profile  Photo -->
              <img src="/img/people.png" style="width:60%">



            </div>

          </div>




        </div>
      </div>
    </div>
  </div>

</div>
<!-- end main content -->

@endsection