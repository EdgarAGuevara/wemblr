@extends('layouts.master')

@section('title') 
	Wemblr -Usuario {{ $user->name }} 
@stop

@section('header_title') 
	 Usuario {{ $user->name }} 
@stop

@section('content')
	@if($user)
		<div class="content">
			<label > Nombre: </label>
			<p>{{$user->name}}</p>
			<label > Username: </label>
			<p>{{$user->username}}</p>
			<label > Email: </label>
			<p>{{$user->email}}</p>
			<label > Password: </label>
			<p>{{$user->password}}</p>
			<label > BIO </label>
			<p>{{$user->bio}}</p>
			<label > Creado el:  </label>
			<p>{{$user->created_at}}</p>
			<label > Modificado el: </label>
			<p>{{$user->updated_at}}</p>
			</div>
		<div>
			<a href="{{route('usuarios.editar', array($user->id))}}">Editar</a>
			{{Form::open(['route' => ['usuarios.borrar', $user->id], 'method' => 'DELETE'])}}
			{{Form::submit('Borrar')}}
			{{Form::close()}}
		</div>		
	@else
		<p>No hay usuario registrado</p>
	@endif	
	<a href="{{route('usuarios.lista')}}">+ Inicio</a><br>
	<a href="{{route('usuarios.nuevo')}}">+ Nuevo Usuario</a><br>
@stop