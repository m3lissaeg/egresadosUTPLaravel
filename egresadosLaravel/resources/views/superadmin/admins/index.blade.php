@extends('layouts.superusuario.layout')

@section("content")

<h4 class="page-title">Usuarios Administradores</h4>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex align-items-center">
					<h4 class="card-title">Lista de usuarios administradores</h4>
					<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" ">
						<i class="fa fa-plus"></i>
							<a class="btn btn-primary btn-round ml-auto" href="{{route('superadmin.admins.create')}}">
								Crear nuevo
							</a>
						</button>
				</div>
			</div>
			<div class="card-body">



				<!--Registro de un nuevo administrador  -->
				<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header no-bd">
								<h5 class="modal-title">
									<span class="fw-mediumbold">
										Nuevo</span>
									<span class="fw-light">
										administrador
									</span>
								</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<div class="modal-footer no-bd">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
							</div>
						</div>
					</div>
				</div>


				<!-- Fin Registro de un nuevo administrador -->
				<div class="table-responsive">
					<table id="add-row" class="display table table-striped table-hover">
						<thead>
							<tr>
								<th>Nombres</th>
								<th>Apellidos</th>
								<th>DNI</th>
								<th>Correo</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Nombres</th>
								<th>Apellidos</th>
								<th>DNI</th>
								<th>Correo</th>
								<th>Action</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach($users as $user)
								<tr>
									<td>{{$user->name}}</td>
									<td>{{$user->lastname}}</td>
									<td>{{$user->dni}}</td>
									<td>{{$user->email}}</td>

									<td>
										<div class="form-button-action">
											<a href="{{route('superadmin.admins.edit', $user->id)}}">
												<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Editar">
													<i class="fa fa-edit"></i>
												</button>
											</a>
										
											<form action="{{route('superadmin.admins.destroy', $user->id)}}" method="POST" class="float-left">
                                				@csrf
                                				{{method_field('DELETE')}}
                                				<button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                            				</form>       
											
										</div>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection