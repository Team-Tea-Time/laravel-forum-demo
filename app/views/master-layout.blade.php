<!DOCTYPE html>
<html>
<head>
    <title>Laravel 4 Forum Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Laravel 4 Forum Demo</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                	<li>
                		<a href="/">{{ trans('forum::base.index') }}</a>
                	</li>
                	<li>
                		<a href="/new">{{ trans('forum::base.new_threads') }}</a>
                	</li>
                </ul>

                @if(Auth::user())
                    <div class="logged-in">
                        Hello, {{ Auth::user()->username }}! &nbsp;
                        <a href="/users/logout" class="btn btn-success">Log out</a>
                    </div>
                @else
                    <form class="navbar-form navbar-right" role="form" method="POST" action="{{{ URL::to('/users/login') }}}">
                        <div class="form-group">
                            <input type="text" placeholder="Username" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
                @endif
            </div>
        </div>
    </nav>

    <div id="main" class="container">
        @if(!Auth::user())
            <div class="alert alert-info">
                Log in with <strong>DemoUser</strong> (or <strong>AnotherUser</strong>) / <strong>demo321</strong>
            </div>
        @endif

        @if (Session::get('error'))
            <div class="alert alert-warning">{{{ Session::get('error') }}}</div>
        @endif

        @if (Session::get('notice'))
            <div class="alert alert-success">{{{ Session::get('notice') }}}</div>
        @endif

        @include('forum::partials.alerts')

        @yield('content')

        <hr>

        <footer>
            <ul class="nav nav-pills">
                <li role="presentation"><a href="https://github.com/Riari/laravel-forum">Laravel Forum on GitHub</a></li>
                <li role="presentation"><a href="https://github.com/Riari/laravel-forum-demo">Site source on GitHub</a></li>
            </ul>
        </footer>
    </div>

    <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
    <script>
        $('form a[data-submit]').click(function() {
            $(this).parent('form').submit();
        });

        $('form[data-confirm]').submit(function() {
            return confirm('{{ trans('forum::base.generic_confirm') }}');
        });
    </script>
</body>
</html>
