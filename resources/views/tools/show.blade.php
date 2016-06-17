@extends('master')

@section('content')


    <li><a href="{{ URL::to('toolsIndex') }}">Bekijk alle Tools</a></li>
    <li><a href="{{ URL::to('toolsCreate') }}">Maak een Tool aan</a></li>
{{--
        <h1>Showing {{ $tools->naam }}</h1>--}}

        <div class="jumbotron text-center">
            <h2>{{ $tools->naam }}</h2>
            <p>
                <strong>Omschrijving:</strong> {{ $tools->omschrijving }}
            </p>

            <a class="btn btn-small btn-primary" href="{{ route('tools.edit', $tools->id) }}">Bewerk deze Tool</a>
        </div>

@endsection
