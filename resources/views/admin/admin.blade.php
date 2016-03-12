<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Löydä lähde</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,700,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css">

    <!-- Fonts
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,900,700' rel='stylesheet' type='text/css'>
    -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header id="">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="{{ asset('/img/Kompassi_Logo.png') }}" class="img-responsive"
                                                      alt="Löydä lähde" width="45">
                    <h1>Löydä lähde</h1></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


</header>
<main class="container-fluid">
    <div class="row">
        <aside class="col-md-2" >
            <h2>Navigation</h2>
            <nav class="admin-side-nav" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
                <ul>
                    <li><a href="/admin">Home</a></li>

                    <li><a href="/admin/springs">Springs</a></li>
                    <li><a href="/admin/posts">Posts</a></li>
                    <li><a href="/admin/pages">Pages</a></li>
                    <li><a href="/admin/users">Users</a></li>
                    <li><a href="/admin/messages">Messages</a></li>
                    <li><a href="/admin/settings">Settings</a></li>
                </ul>
            </nav>
        </aside>
        @yield('content')
    </div>
</main>
<script src="/js/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-strap/1.0.8/vue-strap.min.js"></script>
<script src="{{ asset('/js/bundle.js') }}"></script>
</body>
</html>