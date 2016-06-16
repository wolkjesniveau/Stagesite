@extends('layouts.app')

@section('content')


    <li><a href="{{ URL::to('toolsIndex') }}">View All Tools</a></li>
    <li><a href="{{ URL::to('toolsCreate') }}">Create a Tool</a>
{{--
        <h1>Showing {{ $tools->naam }}</h1>--}}

        <div class="jumbotron text-center">
            <h2>{{ $tools->naam }}</h2>
            <p>
                <strong>Omschrijving:</strong> {{ $tools->omschrijving }}
            </p>
        </div>


@endsection
