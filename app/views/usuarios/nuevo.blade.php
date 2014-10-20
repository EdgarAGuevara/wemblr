@extends('layouts.master')

@section('title') 
	Wemblr - Nuevo Usuario 
@stop

@section('header_title') 
	Nuevo Usuario 
@stop

@section('content')
	{{Form::open(array('route' => 'usuarios.nuevofin', 'method' => 'POST'))}}
		@include('usuarios._formulario')
	{{Form::close()}}
@stop