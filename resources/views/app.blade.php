<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel Forum Demo</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Laravel 5 Forum Demo</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>
					<li><a href="/new">New &amp; updated threads</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		@section('top')
		@show
	</div>

	<div id="main" class="container">
		@if (Auth::guest())
		<div class="alert alert-info">
			Log in with <strong>user@forum.net</strong> or <strong>moderator@forum.net</strong> and <strong>demo321</strong>
		</div>
		@endif

		@yield('content')

		<hr>

		<div class="text-center">
			Built for <a href="http://laravel.com/">Laravel 5</a> by <a href="http://teamteatime.net/">TeamTeaTime</a> &nbsp;
			<a href="https://github.com/Team-Tea-Time/laravel-forum-demo">View source on GitHub</a> &nbsp;
			<a href="https://github.com/Riari/laravel-forum">View package source on GitHub</a>
		</div>
	</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<script>
	$(document).ready(function() {
	    $('ul.nav li a').each(function() {
	        if ($(this).attr('href') === window.location.pathname)
	        {
	            $(this).parent('li').addClass('active');
	        }
	    });
	});
	</script>

	@section('bottom')
	@show
</body>
</html>