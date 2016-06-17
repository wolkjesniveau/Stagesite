@extends('master')

@section('content')


    <li><a href="{{ route('tool.index') }}">Bekijk alle Tools</a></li>
    <li><a href="{{ route('tool.create') }}">Maak een Tool aan</a></li>
{{--
        <h1>Showing {{ $tools->naam }}</h1>--}}

        <div class="jumbotron text-center">
            <h2>{{ $tool->naam }}</h2>
            <p>
                <strong>Omschrijving:</strong> {{ $tool->omschrijving }}
            </p>

            <a class="btn btn-small btn-primary" href="{{ route('tool.edit', $tool->id) }}">Bewerk deze Tool</a>
        </div>

@endsection
