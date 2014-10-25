<?php
	/*POr default el generators no crea la herencia con una barra osea:
		extends \BaseController
	pero laravel cambio y ahora es asi: */
	
class PostsController extends BaseController  {


	public function __construct()
	{
		/*constructor de la clase en este caos del modelo al ponerle el auth aqui hace que 
		cada vez que se llame a una funcion de el como se tiene que instanciar se ejecuta el autentificado*/
		$this->beforeFilter('auth');
	}

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		//$posts = Post::orderBy('created_at', 'desc')->get();
		//$posts = Post::with('user')->where('user_id', '=', Auth::user()->id)->orderBy('text', 'desc')->get();
		$posts = Post::with('usuario')->orderBy('created_at', 'desc')->get();
		// var_dump($posts);	
		return View::make('posts.index', ['posts' => $posts]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$post = new Post();
		return View::make('posts.create')->with('post', $post);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
		//Si el usuario está logeado
		if(Auth::check()){
			//Guardamos el post
			$post = new Post();
			$post->text = Input::get('text');
			$post->usuarios_id = Auth::user()->id;
			if($post->save()){
				return Redirect::route('posts.show', [$post->id]);
			}else{
				return Redirect::route('posts.create')->withInput()->withErrors($post->errors());
			}
		}else{
			//Redireccionamos hacia la pantalla de login
			return Redirect::route('users.login')->withError('Debes iniciar sesión.');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		if($post){
			// var_dump($post);
			return View::make('posts.show', ['post' => $post]);
		}else{
			Throw new NotFoundHttpException;
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /posts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}