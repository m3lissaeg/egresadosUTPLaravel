@extends('layouts.superusuario.layout')

@section("content")

<h1>Actualizacion Usuario Administrador</h1>

<form action="{{route('superadmin.admins.update',$user->id)}}" method="POST">
    @csrf
    {{method_field('PUT')}}

    <div class="form-group row">

        <div class="col">
            <label for="name" class="col-md-2 col-form-label text-md-right"> Nombres</label>
            <input id="name" type="text" class="form-control input-pill @error('name') is-invalid @enderror"  value="{{$user->name}}" name="name" required autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col">
            <label for="lastname" class="col-md-2 col-form-label text-md-right"> Apellidos</label>
            <input id="lastname" type="text" class="form-control input-pill @error('lastname') is-invalid @enderror" name="lastname" value="{{$user->lastname}}" required autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

    </div>

    <div class="form-group row">
        
        <div class="col">
            <label for="dni" class="col-md-2 col-form-label text-md-right"> Documento de identificación</label>
            <input id="dni" type="dni" class="form-control input-pill @error('dni') is-invalid @enderror" name="dni" value="{{$user->dni}}" required autofocus>

        </div>

        <div class="col">
            <label for="email" class="col-md-2 col-form-label text-md-right"> email</label>
            <input id="email" type="email" class="form-control input-pill @error('email') is-invalid @enderror" name="email" required autocomplete="email" value="{{$user->email}}" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            
        </div>
        
    </div>
    
    <div class="form-group row">
        
        <div class="col">
            <label for="phone" class="col-md-2 col-form-label text-md-right"> Número de teléfono</label>
            <input id="phone" type="phone" class="form-control input-pill @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone" value="{{$user->phone}}" autofocus>
    
        </div>

        <div class="col">
            <label for="address" class="col-md-2 col-form-label text-md-right"> Dirección</label>
            <input id="address" type="address" class="form-control input-pill @error('address') is-invalid @enderror" name="address" required autocomplete="address" value="{{$user->address}}" autofocus>
        </div>

        
    </div>

    <div class="form-group row">
        <div class="col">
            <label for="password" class="col-md-2 col-form-label text-md-right"> Contraseña</label>
            <input id="password" type="password" class="form-control input-pill @error('password') is-invalid @enderror" name="password" required autocomplete="password" value="{{$user->name}}" autofocus>
        </div>

    </div>
    
    <button type="submit" class="btn btn-primary"> Guardar</button>

</form>

@endsection