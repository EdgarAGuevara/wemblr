@extends('layouts.master')

@section('title') 
	Wemblr - {{{$post->text}}} 
@stop

@section('header')
	@parent
	<h2>Publicado por: <a href="{{route('usuarios.show', ['id' => $post->usuario->id])}}">{{{$post->usuario->name}}}</a></h2>
	<h3>El día: {{$post->created_at}}</h3>
@stop
	
@section('header_title') 
	Post Nro. {{$post->id}} 
@stop
	
@section('content')
	<article>
		<p style="font-size: 60px">{{{$post->text}}}</p>
	</article>
@stop