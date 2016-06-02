<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    {{-- FONTS --}}
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    {{-- STYLESHEETS --}}
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/costum.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.6.3/css/font-awesome.min.css') }}">

    {{-- DEPENDENCIES --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>

{{-- HEADER BEGIN --}}
<header>
    <div class="header-container">
        {{-- HEADER LEFT --}}
        <div class="header header-left bold">
            <ul>
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li><a href="{{ route('companies') }}">Bedrijven</a></li>
                @if (Auth::user())
                    <li><a href="{{ route('admin') }}">Admin</a></li>
                @endif
            </ul>
        </div>

        {{-- HEADER MID --}}
        <div class="header header-mid">
            <div class="header-search">
                <form method="get" action="">
                    <input class="search" id="search" type="text" name="search" placeholder=" Zoeken op de website">
                    <button class="search-button">Zoek</button>
                </form>
            </div>
        </div>

        {{-- HEADER RIGHT --}}
        <div class="header header-right bold">
            @if (Auth::guest())
            <a href="{{ route('login') }}">inloggen/registreren</a>
            @else
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
            @endif
            <div class="btn-group dropdown-toggle">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="fa fa-user tw" title="Toggle dropdown menu"></span>
                </a>

                <ul class="dropdown-menu ">
                    @if (Auth::guest())
                    <li><a href="{{ route('login') }}"><i class="fa fa-key fa-fw"></i> Log in</a></li>
                    <li><a href="{{ route('register') }}"><i class="fa fa-user-plus fa-fw"></i> Register</a></li>
                    <hr class="devider">                {{-- WHEN LOGGED IN GIVE THESE OPTIONS --}}
                    @else
                    <li class=""><a href="#"><i class="fa fa-key fa-fw"></i> Profiel</a></li>
                    <li class=""><a href="#"><i class="fa fa-user-plus fa-fw"></i> Uitloggen</a></li>
                    <hr class="devider hidden">         {{-- WHEN ADMIN GIVE THIS OPTIONS --}}
                    @endif
                    <li class=""><a href="{{ route('admin') }}"><i class="fa fa-unlock fa-fw"></i> Admin</a></li>
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
    {{-- FOOTER --}}
    <footer>
            @yield('footer')

    </footer>

</body>
</html>
