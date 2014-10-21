<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="iso-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>
<body>
	@section('navbar')
	<div class="navbar-wrapper {{ ( isset($class) && ! empty($class) ) ? $class : null }}">
	<!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
		<div class="container">
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="{{route('usuarios.main')}}">Wemblr</a>
					<!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a href="#about">Acerca de</a></li>
							<li><a href="#contact">Contacto</a></li>
							<!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Acciones <b class="caret"></b></a>
								<ul class="dropdown-menu">
									@if(Auth::guest())
									<li><a href="{{--route('users.create')--}}">Registro</a></li>
									<li><a href="{{--route('users.login')--}}">Inicio de Sesión</a></li>
									@else
									<li><a href="{{--route('users.show', ['id' => Auth::user()->id])--}}">Mi Cuenta</a></li>
									<li><a href="{{--route('users.edit', ['id' => Auth::user()->id])--}}">Editar perfil</a></li>
									<li><a href="{{--route('users.logout')--}}">Cerrar Sesión</a></li>
									@endif
									<li class="divider"></li>
									<li class="nav-header">Encabezado de navegación</li>
									<li><a href="#">Link separado</a></li>
									<li><a href="#">Otro link separado</a></li>
								</ul>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div><!-- /.navbar-inner -->
			</div><!-- /.navbar -->
		</div> <!-- /.container -->
	</div><!-- /.navbar-wrapper -->
	@show
	<header class="container">
		@section('header')
			<h1>@yield('header_title')</h1>
		@show
	</header>
	<div id="main" class="container">
		@yield('content')
	</div>
	<footer class="container">
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p>&copy; 2014 Wembler, Inc. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Términos y condiciones</a></p>
	</footer>
	<script src="http://code.jquery.com/jquery.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>