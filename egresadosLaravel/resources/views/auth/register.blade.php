@extends('layouts.home.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 shadow">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" name="registration">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"   >

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" name="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror"  value="{{ old('lastname') }}" required autocomplete="lastname"  >

                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('DNI') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" >

                                @error('dni')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="txt" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" >

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Ejemplo: +57 333 3333333 " required autocomplete="phone" >

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" style="margin: 10px;" class="col-md-4 col-form-label text-md-right"> Género </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" id="genero1" value="Hombre">
                                <label class="form-check-label" for="genero1"> Hombre </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" id="genero2" value="Mujer">
                                <label class="form-check-label" for="genero2"> Mujer </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" id="genero3" value="Otro">
                                <label class="form-check-label" for="genero3"> Otro </label>
                            </div>

                        </div>

                        <div class="form-group row">
                            <!-- Date input -->
                            <label class="col-md-4 col-form-label text-md-right" for="date"> Fecha de nacimiento </label>
                            <div class="col-md-6">
                                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" />
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="egreso" class="col-md-4 col-form-label text-md-right"> Carrera de egreso </label>

                            <div class="col-md-6">
                                <select class="custom-select" id="egreso" name="egreso" required>
                                    <option value="Licenciatura en Artes Visuales"> 1. Licenciatura en Artes Visuales </option>
                                    <option value="Licenciatura en Bilingüismo con énfasis en Inglés"> 2. Licenciatura en Bilingüismo con énfasis en Inglés </option>
                                    <option value="Licenciatura en Filosofía"> 3. Licenciatura en Filosofía </option>
                                    <option value="Licenciatura en Música"> 4. Licenciatura en Música </option>
                                    <option value="Ingeniería en Procesos Agroindustriales"> 5. Ingeniería en Procesos Agroindustriales </option>
                                    <option value="Ingeniería en Procesos Sostenibles de las Maderas"> 6. Ingeniería en Procesos Sostenibles de las Maderas </option>
                                    <option value="Tecnología en Producción Forestal"> 7. Tecnología en Producción Forestal </option>
                                    <option value="Tecnología en Producción Hortícola"> 8. Tecnología en Producción Hortícola </option>
                                    <option value="Administración Ambiental"> 9. Administración Ambiental </option>
                                    <option value="Administración del Turismo Sostenible"> 10. Administración del Turismo Sostenible </option>
                                    <option value="Tecnología en Gestión del Turismo Sostenible"> 11. Tecnología en Gestión del Turismo Sostenible </option>
                                    <option value="Licenciatura en Matemáticas y Física"> 12. Licenciatura en Matemáticas y Física </option>
                                    <option value="Ingeniería Industrial"> 13. Ingeniería Industrial </option>
                                    <option value="Licenciatura en Educación Básica Primaria"> 14. Licenciatura en Educación Básica Primaria </option>
                                    <option value="Licenciatura en Pedagogía Infantil"> 15. Licenciatura en Pedagogía Infantil </option>
                                    <option value="Licenciatura en Etnoeducación"> 16. Licenciatura en Etnoeducación </option>
                                    <option value="Licenciatura en Literatura y Lengua Castellana"> 17. Licenciatura en Literatura y Lengua Castellana </option>
                                    <option value="Licenciatura en Español y Literatura"> 18. Licenciatura en Español y Literatura </option>
                                    <option value="Licenciatura en Comunicación e Informática Educativa"> 19. Licenciatura en Comunicación e Informática Educativa </option>
                                    <option value="Licenciatura en Tecnología"> 20. Licenciatura en Tecnología </option>
                                    <option value="Ciencias del Deporte y la Recreación"> 21. Ciencias del Deporte y la Recreación </option>
                                    <option value="Medicina"> 22. Medicina </option>
                                    <option value="Medicina Veterinaria y Zootecnia"> 23. Medicina Veterinaria y Zootecnia </option>
                                    <option value="Tecnología en Atención Prehospitalaria"> 24. Tecnología en Atención Prehospitalaria </option>
                                    <option value="Ingeniería Electrónica (Diurna)"> 25. Ingeniería Electrónica (Diurna) </option>
                                    <option value="Ingeniería Eléctrica"> 26. Ingeniería Eléctrica </option>
                                    <option value="Ingeniería Física"> 27. Ingeniería Física </option>
                                    <option value="Ingeniería de Sistemas y Computación"> 28. Ingeniería de Sistemas y Computación </option>
                                    <option value="Tecnología en Desarrollo de Software"> 29. Tecnología en Desarrollo de Software </option>
                                    <option value="Ingeniería Mecánica"> 30. Ingeniería Mecánica </option>
                                    <option value="Administración Industrial"> 31. Administración Industrial </option>
                                    <option value="Ingeniería de Manufactura"> 32. Ingeniería de Manufactura </option>
                                    <option value="Química Industrial"> 33. Química Industrial </option>
                                    <option value="Tecnología Química"> 34. Tecnología Química </option>
                                    <option value="Tecnología Eléctrica"> 35. Tecnología Eléctrica </option>
                                    <option value="Tecnología Industrial"> 36. Tecnología Industrial </option>
                                    <option value="Tecnología Mecánica"> 37. Tecnología Mecánica </option>
                                    <option value="Ingeniería en Mecatrónica"> 38. Ingeniería en Mecatrónica </option>
                                    <option value="Tecnología en Mecatrónica"> 39. Tecnología en Mecatrónica </option>
                                    <option value="Técnico Profesional en Mecatrónica"> 40. Técnico Profesional en Mecatrónica </option>



                                </select>
                                <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0  justify-content-center">
                            <div class="col-md-6 offset-md-4 ">
                            </div>
                            <div class="col-md-6 offset-md-4 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarme') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection