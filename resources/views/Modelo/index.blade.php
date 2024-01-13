@extends('layouts.base')

@section('contenido')
<a href="modelo/create" class="btn btn-primary" >Crear</a>

<table class="table table-dark table-striped mt-4">
	
	<thead>
		<tr>
			
			<th scope="col"> ID </th>
			<th scope="col"> Nombres </th>
			<th scope="col"> Apellidos </th>
			<th scope="col"> DUI </th>
			<th scope="col"> Estado Civil </th>
			<th scope="col"> Sexo </th>
			<th scope="col"> Correo </th>
			<th scope="col"> Telefono </th>
			<th scope="col"> Movil </th>
			<th scope="col"> Fecha de Nacimiento </th>
			<th scope="col"> Registro </th>
			<th scope="col"> Modifico </th>
			<th scope="col"> FechaR </th>
			<th scope="col"> FechaM </th>
			<th scope="col"> Estado </th>
			<th scope="col"> Acciones </th>

		</tr>
	</thead>

	<tbody>
		
		@foreach($modelo as $modelo)

		<tr>
			
			<td>{{$modelo->id}}</td>
			<td>{{$modelo->nombres}}</td>
			<td>{{$modelo->apellidos}}</td>
			<td>{{$modelo->numero_identidad}}</td>
			<td>{{$modelo->estado_civil}}</td>
			<td>{{$modelo->sexo}}</td>
			<td>{{$modelo->correo}}</td>
			<td>{{$modelo->telefono}}</td>
			<td>{{$modelo->numero_movil}}</td>
			<td>{{$modelo->fecha_nacimiento}}</td>
			<td>{{$modelo->usuario_registro}}</td>
			<td>{{$modelo->usuario_modifico}}</td>
			<td>{{$modelo->create_at}}</td>
			<td>{{$modelo->update_at}}</td>
			<td>{{$modelo->estado_empleado}}</td>
			<td>
				<form action="{{ route ('modelo.destroy',$modelo->id)}}" method="POST">
				@csrf
				@method('DELETE')
				<a href="/modelo/{{$modelo->id}}/edit" class="btn btn-info"> Editar </a>
				<button type="submit" class="btn btn-danger"> Borrar </button>
				</form>
			</td>

		</tr>

		@endforeach

	</tbody>

</table>

@endsection