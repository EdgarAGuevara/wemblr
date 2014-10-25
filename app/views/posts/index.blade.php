@extends('layouts.master')
@section('title') 
	Wemblr - Lista de posts 
@stop
@section('header')
	@parent
	<h2>Bienvenido</h2>
@stop
@section('header_title') 
	Lista de posts @stop
@section('content')
	<style>
		table,
		th,
		td{
			border: 1px solid #333;
		}
	</style>
	@if(! $posts->isEmpty())
		<table style="border">
			<thead>
				<tr>
					<th>id</th>
					<th>publicado por</th>
					<th>text</th>
					<th>created_at</th>
					<th>updated_at</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $post)
				<tr>
					<td>{{$post->id}}</td>
					<td>{{$post->usuario->name}}</td>
					<td>{{$post->text}}</td>
					<td>{{$post->created_at}}</td>
					<td>{{$post->updated_at}}</td>	
					<td>
						<a href="{{--route('posts.show', array($post->id))--}}">Ver</a>
					</td>	
				</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p>No hay posts</p>
	@endif
	<a href="{{--route('posts.create')--}}">+ Nuevo Post</a>
@stop