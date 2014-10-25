<fieldset>
@if($errors->has('text'))
	@foreach($errors->get('text') as $error):
		{{Form::label('text', $error)}}
	@endforeach
@endif
	{{Form::label('text', '¿Qué estás pensando?: ')}}
	{{Form::textarea('text', $post->text, array('placeholder' => 'Cuéntanos más'))}}
</fieldset>
<fieldset>
	{{Form::submit()}}
</fieldset>