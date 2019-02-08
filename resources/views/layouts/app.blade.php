<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
        <!-- <link href="{{ asset('css/home_style.css') }}" rel="stylesheet" id="bootstrap-css"> -->
        @yield('assets')
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>
        <div id="app">
        <div class="navbar bg-dark navbar-dark header box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>Jobber</strong>
                </a>
            </div>
        </div>
        <div class="contents">
            @yield('content')
        </div>
        </div>
        @include('layouts.footer')
    </body>
</html>