@extends('layouts.master')

@section('title') 
	Wemblr -Usuario {{ $user->name }} 
@stop

@section('header_title') 
	Bienvenido Usuario {{ $user->name }} 
@stop

@section('content')
	<a href="{{route('usuarios.logout')}}">Cerrar Sesión</a><br>
@stop