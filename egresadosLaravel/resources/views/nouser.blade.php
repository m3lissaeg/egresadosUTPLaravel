@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> ¡Rayos!</div>

                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            <h3>
                                ¿Estás seguro que eres egresado de la UTP?
                            </h3>

                            <p>
                                Lastimosamente  no has sido identificado en nuestra base de datos, si has cometido algún 
                                error al ingresar tus datos de <strong> registro </strong> , inténtalo nuevamente;
                                De lo contrario, comunícate con  los administradores  del sitio web.
                            </p>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
