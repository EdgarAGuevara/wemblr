<fieldset>
	@if($errors->has('name'))
	@foreach($errors->get('name') as $error):
	{{Form::label('name', $error)}}
	@endforeach
	@endif
	{{Form::label('name', 'Nombre: ')}}
	{{Form::text('name', $user->name, array('placeholder' => 'Coloca tu nombre'))}}
</fieldset>
<fieldset>
	@if($errors->has('username'))
	@foreach($errors->get('username') as $error):
	{{Form::label('username', $error)}}
	@endforeach
	@endif
	{{Form::label('username', 'Nombre de usuario: ')}}
	{{Form::text('username', $user->username, array('placeholder' => 'Elige un nombre de usuario'))}}
</fieldset>
<fieldset>
	@if($errors->has('email'))
	@foreach($errors->get('email') as $error):
	{{Form::label('email', $error)}}
	@endforeach
	@endif
	{{Form::label('email', 'Email: ')}}
	{{Form::text('email', $user->email, array('placeholder' => 'Ingresa tu email'))}}
</fieldset>
<fieldset>
	@if($errors->has('password'))
	@foreach($errors->get('password') as $error):
	{{Form::label('password', $error)}}
	@endforeach
	@endif
	{{Form::label('password', 'Contraseña: ')}}
	{{Form::password('password', array('placeholder' => 'Escribe una contraseña'))}}
</fieldset>
<fieldset>
	@if($errors->has('password_confirmation'))
	@foreach($errors->get('password_confirmation') as $error):
	{{Form::label('password_confirmation', $error)}}
	@endforeach
	@endif
	{{Form::label('password_confirmation', 'Confirmación de contraseña: ')}}
	{{Form::password('password_confirmation', array('placeholder' => 'Confirma tu contraseña'))}}
</fieldset>
<fieldset>
	@if($errors->has('bio'))
	@foreach($errors->get('bio') as $error):
	{{Form::label('bio', $error)}}
	@endforeach
	@endif
	{{Form::label('bio', 'Cuéntanos acerca de tí en 160 caracteres: ')}}
	{{Form::textarea('bio', $user->bio, array('placeholder' => 'Bio'))}}
</fieldset>
<fieldset>
	{{Form::submit()}}
</fieldset>