<?php

class UsuarioController extends BaseController {


	public function lista()
	{
		$usuario = Usuario::all();		
		return View::make('usuarios.lista',array('users'=> $usuario) );
	}
	
	/*Segmento tarea 1*/
	public function main()
	{
		/*Se crea una vista con la funcion make que recibe un string con la ruta del archivo a impirmir y un array con los datos que se le quieran pasar a la vista*/
		return View::make('usuarios.main',array('user'=> new Usuario()) );
	}

	public function nuevo()
	{
		/*Se crea una vista con la funcion make que recibe un string con la ruta del archivo a impirmir y un array con los datos que se le quieran pasar a la vista*/
		return View::make('usuarios.nuevo',array('user'=> new Usuario()) );
	}

	public function nuevofin()
	{
		$usuario = new Usuario();
		$usuario->name = Input::get('name');
		$usuario->username = Input::get('username');
		$usuario->email = Input::get('email');
		$usuario->password = Input::get('password');
		$usuario->password_confirmation = Input::get('password_confirmation');
		$usuario->bio = Input::get('bio');
		if($usuario->save()){
			return Redirect::route('usuarios.show', array($usuario->id));
		}else{
			return Redirect::route('usuarios.nuevo')->withErrors($usuario->errors());
		}
	}

	public function show($id)
	{
		$usuario = Usuario::find($id);
		if($usuario){
			return View::make('usuarios.show', array('user'=>$usuario));
		}else{
			Throw new NotFoundHttpException();
		}
	}
	/*Segmento tarea 1*/

	/*Segmento tarea 2*/
	public function editar($id)
	{
		$usuario = Usuario::find($id);
		if($usuario){
			return View::make('usuarios.editar', array('user'=>$usuario));
		}else{
			Throw new NotFoundHttpException();
		}
	}

	public function update($id)
	{
		$user = Usuario::find($id);
		if($user){
			$user->name = Input::get('name');
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Input::get('password');
			$user->password_confirmation = Input::get('password_confirmation');
			$user->bio = Input::get('bio');
		if($user->updateUniques()){
			return Redirect::route('usuarios.show', array($user->id));
		}else{
			return Redirect::route('usuarios.editar', array($id))->withErrors($user->errors());
		}
		}else{
			Throw new NotFoundHttpException;	
		}
	}
	/*Segmento tarea 2*/

	/*Segmento tarea 3*/
	public function login()
	{
		$error = Session::get('error');
		return View::make('usuarios.login')->with('error', $error);
	}

	public function auth()
	{
		$auth_data = ['email' => Input::get('email'), 'password' => Input::get('password')];

		if(Auth::attempt($auth_data))
		{
			return Redirect::intended( route('usuarios.main') );
		}
		else
		{															/*nombre del archivo.mensaje*/
			return Redirect::route('usuarios.login')->with('error', Lang::get('reminders.wrong_credentials'))->withInput();
		}
	}
	/*Segmento tarea 3*/	
}
