@extends('layouts.admin.layout')
@section('content')
<div class="container-fluid">
          <!-- Page Heading -->
           <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panel de Control</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Usuarios egresados actuales</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($egresados, 0)}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Publicaciones Realizadas por mí</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 10 </div>
                                </div>
                                <div class="col">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Publicaciones Totales</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

          <h1 class="h3 mb-2 text-gray-800">Usuarios Egresados</h1>
          <p class="mb-4">Visualiza o elimina los usuarios que se han unido a la plataforma de Egresados</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Listado</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido </th>
                    <th>Direccion</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
                  </thead>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido </th>
                    <th>Direccion</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
                  </tfoot>
                  <tbody>
                  @foreach($egresados as $egresado)
                    <tr>
                      <td>{{$egresado->id}}</td>
                      <td>{{$egresado->name}}</td>
                      <td>{{$egresado->lastname}}</td>
                      <td>{{$egresado->address}}</td>
                      <td>{{$egresado->email}}</td>
                      <td> 
                          <a href="{{route('admin.egresados.show', $egresado->id)}}" class="btn btn-success btn-circle">
                              <i class="fas fa-eye"></i> </a>

                          <form action="{{route('admin.egresados.destroy', $egresado->id)}}" method="POST" class="float-left">
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
@endsection