@extends('layouts.master')

@section('title') 
	Wemblr -Usuario {{ $user->name }} 
@stop

@section('header_title') 
	 Usuario {{ $user->name }} 
@stop

@section('content')
	{{Form::open(array('route' => array('usuarios.update',$user->id), 'method' => 'POST'))}}
		@include('usuarios._formulario')
	{{Form::close()}}
@stop