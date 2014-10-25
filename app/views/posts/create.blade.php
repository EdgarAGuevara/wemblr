@extends('layouts.master')

@section('title') 
	Wemblr - Nuevo Post 
@stop

@section('header_title') 
	Nuevo Post 
@stop

@section('content')
	{{Form::open(array('route' => 'posts.store', 'method' => 'POST'))}}
		@include('posts._formulario')
	{{Form::close()}}
@stop