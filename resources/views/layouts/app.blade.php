<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stage Site</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:30" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/costum.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
{{-- HEADER BEGIN --}}
<header>
    <div class="header-container">
        {{-- HEADER LEFT --}}
        <div class="header header-left">
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
                <input class="search" type="text" name="search" placeholder=" Zoeken op de website">
                <button class="search-button">Zoek</button>
            </div>
        </div>

        {{-- HEADER RIGHT --}}
        <div class="header header-right">
            @if (Auth::guest())
                <a class="devider-right" href="{{ route('login') }}">inloggen</a>

                <a href="{{ route('register') }}">registreren</a>
            @else
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
            @endif

        </div>
    </div>
</header>
{{-- HEADER END --}}
<body>


{{-- TOP PAGE BANNER --}}
<div class="filler">

</div>

{{-- CONTENT --}}
<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
