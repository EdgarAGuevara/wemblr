@extends('layouts.master')

@section('title') 
	Wemblr -Usuario  
@stop

@section('header_title') 
	Ingrese sus datos.
@stop

@section('content')
	{{Form::open(array('route' => 'usuarios.auth', 'method' => 'POST'))}}
		<fieldset>
			@if(isset($error) && ! empty($error))
				<legend>{{$error}}</legend>
			@endif
			<fieldset>
				{{Form::label('email', 'Email: ')}}
				{{Form::email('email', Input::old('email'))}}
			</fieldset>
			<fieldset>
				{{Form::label('password', 'Contrasena: ')}}				
				{{Form::password('password')}}
			</fieldset>
			<fieldset>
				{{Form::submit('Iniciar sesion')}}
			</fieldset>
		</fieldset>
	{{Form::close()}}
@stop