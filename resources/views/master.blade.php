<!DOCTYPE html>
<html>
<head>
    <title>Project MVC | @yield('title')</title>

    {{-- FONTS --}}
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    {{-- STYLESHEETS --}}
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/costum.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.6.3/css/font-awesome.min.css') }}">

    {{-- DEPENDENCIES --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
</head>


<body>
@include('layouts.header')

{{-- TOP PAGE BANNER --}}
<div class="headerimg">
    <p>@yield('title')</p>
</div>

{{-- CONTENT --}}
<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>
@include('layouts.footer')

</body>
</html>
