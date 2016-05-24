<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/costum.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.6.3/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>

{{-- HEADER BEGIN --}}
<header>
    <div class="header-container">
        {{-- HEADER LEFT --}}
        <div class="header header-left">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Bedrijven</a></li>
                <li><a href="">Admin</a></li>
            </ul>
        </div>

        {{-- HEADER MID --}}
        <div class="header header-mid">
            <div class="header-search">
                <input class="search" type="text" name="search" placeholder="Zoeken op de website">
                <button class="search-button">Zoek</button>
            </div>
        </div>

        {{-- HEADER RIGHT --}}
        <div class="header header-right">
            <a href="#">inloggen/registreren</a>
            <div class="btn-group dropdown-toggle">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="fa fa-user tw" title="Toggle dropdown menu"></span>
                </a>

                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-key fa-fw"></i> Log in</a></li>
                    <li><a href="#"><i class="fa fa-user-plus fa-fw"></i> Register</a></li>
                    <hr class="devider">
                    <li><a href="#"><i class="fa fa-unlock fa-fw"></i> Admin</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
{{-- HEADER END --}}
<body>


{{-- TOP PAGE BANNER --}}
<div class="headerimg">
    PLACEHOLDER
</div>

{{-- CONTENT --}}
<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>
</body>
</html>
