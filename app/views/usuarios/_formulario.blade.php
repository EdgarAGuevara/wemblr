<fieldset>
	
	{{Form::label('name', 'Nombre: ')}}
	{{Form::text('name', $user->name, array('placeholder' => 'Coloca tu nombre'))}}
	@if($errors->has('name'))
		@foreach($errors->get('name') as $error):
			{{Form::label('name', $error)}}
		@endforeach
	@endif
</fieldset>
<fieldset>
	
	{{Form::label('username', 'Nombre de usuario: ')}}
	{{Form::text('username', $user->username, array('placeholder' => 'Elige un nombre de usuario'))}}
	@if($errors->has('username'))
		@foreach($errors->get('username') as $error):
			{{Form::label('username', $error)}}
		@endforeach
	@endif
</fieldset>
<fieldset>
	
	{{Form::label('email', 'Email: ')}}
	{{Form::text('email', $user->email, array('placeholder' => 'Ingresa tu email'))}}
	@if($errors->has('email'))
		@foreach($errors->get('email') as $error):
			{{Form::label('email', $error)}}
		@endforeach
	@endif
</fieldset>
<fieldset>

	{{Form::label('password', 'Contraseña: ')}}
	{{Form::password('password', array('placeholder' => 'Escribe una contraseña'))}}
	@if($errors->has('password'))
		@foreach($errors->get('password') as $error):
			{{Form::label('password', $error)}}
		@endforeach
	@endif
</fieldset>
<fieldset>
	
	{{Form::label('password_confirmation', 'Confirmación de contraseña: ')}}
	{{Form::password('password_confirmation', array('placeholder' => 'Confirma tu contraseña'))}}
	@if($errors->has('password_confirmation'))
		@foreach($errors->get('password_confirmation') as $error):
			{{Form::label('password_confirmation', $error)}}
		@endforeach
	@endif
</fieldset>
<fieldset>

	{{Form::label('bio', 'Cuéntanos acerca de tí en 160 caracteres: ')}}
	{{Form::textarea('bio', $user->bio, array('placeholder' => 'Bio'))}}
	@if($errors->has('bio'))
		@foreach($errors->get('bio') as $error):
			{{Form::label('bio', $error)}}
		@endforeach
	@endif
</fieldset>
<fieldset>
	{{Form::submit()}}
</fieldset>