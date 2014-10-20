@extends('layouts.master')

@section('title') 
	Wemblr -Usuarios
@stop

@section('header_title') 
	 Usuarios 
@stop

@section('content')
	@if(! $users->isEmpty())
		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>username</th>
					<th>email</th>
					<th>password</th>
					<th>created_at</th>
					<th>updated_at</th>
					<th>Acciones</th>
				</tr>
			</thead>
		<tbody>
		@foreach($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->username}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->password}}</td>
				<td>{{$user->created_at}}</td>
				<td>{{$user->updated_at}}</td>
				<td>
					<a href="{{route('usuarios.show', array($user->id))}}">Ver</a>
					<a href="{{route('usuarios.editar', array($user->id))}}">Editar</a>
					{{Form::open(['route' => ['usuarios.borrar', $user->id], 'method' => 'DELETE'])}}
					{{Form::submit('Borrar')}}
					{{Form::close()}}
				</td>	
			</tr>
		@endforeach
		</tbody>
		</table>
	@else
		<p>No hay usuarios registrados</p>
	@endif
	<a href="{{route('usuarios.nuevo')}}">+ Nuevo Usuario</a>
@stop