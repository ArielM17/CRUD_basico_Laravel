@extends('layouts.base')

@section('contenido')

<h2> Editar Registros </h2>


<form action="/modelo/{{$modelo->id}}" method="POST">
	@csrf
	@method('PUT')
	<div class="mb-3">
		
		<label for="" class="form-label"> Nombres </label>
		<input id="nombres" name="nombres" type="text" class="form-control" value="{{$modelo->nombre}}">

	</div>
	<div class="mb-3">
		
		<label for="" class="form-label"> Apellidos </label>
		<input id="apellidos" name="apellidos" type="text" class="form-control" value="{{$modelo->apellidos}}">

	</div>
	<div class="mb-3">
		
		<label for="" class="form-label"> DUI </label>
		<input id="numero_identidad" name="numero_identidad" type="text" class="form-control" value="{{$modelo->numero_identidad}}">

	</div>
	<div class="mb-3">
		
		<label for="" class="form-label"> Estado Civil </label>
		<input id="estado_civil" name="estado_civil" type="text" class="form-control" value="{{$modelo->estado_civil}}" >

	</div>
	<div class="mb-3">
		
		<label for="" class="form-label"> Sexo </label>
		<input id="sexo" name="sexo" type="text" class="form-control" value="{{$modelo->sexo}}">

	</div>
	<div class="mb-3">
		
		<label for="" class="form-label"> Correo </label>
		<input id="correo" name="correo" type="text" class="form-control" value="{{$modelo->correo}}" >

	</div>
	<div class="mb-3">
		
		<label for="" class="form-label"> Telefono </label>
		<input id="telefono" name="telefono" type="text" class="form-control" value="{{$modelo->telefono}}">

	</div>
	<div class="mb-3">
		
		<label for="" class="form-label"> Movil </label>
		<input id="numero_movil" name="numero_movil" type="text" class="form-control" value="{{$modelo->numero_movil}}" >

	</div>
	<div class="mb-3">
		
		<label for="" class="form-label"> Fecha de Nacimiento </label>
		<input id="fecha_nacimiento" name="fecha_nacimiento" type="date" class="form-control" value="{{$modelo->fecha_nacimiento}}" >

	</div>
	<div class="mb-3">
		
		<label for="" class="form-label"> Usuario Registro </label>
		<input id="usuario_registro" name="usuario_registro" type="text" class="form-control" value="{{$modelo->usuario_registro}}">

	</div>
	<div class="mb-3">
		
		<label for="" class="form-label"> Usuario Modifico </label>
		<input id="usuario_modifico" name="usuario_modifico" type="text" class="form-control" value="{{$modelo->usuario_modifico}}" >

	</div>
	<div class="mb-3">
		
		<label for="" class="form-label"> Estado Empleado </label>
		<input id="estado_empleado" name="estado_empleado" type="boolean" class="form-control" value="{{$modelo->estado_empleado}}" >

	</div>

	<a href="/modelo" class="btn btn-secondary"> Cancelar </a>
	<button type="submit" class="btn btn-primary"> Guardar </button>

</form>


@endsection