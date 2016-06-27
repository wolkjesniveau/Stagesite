@extends('admin.master')


@section('content')
    <h1 class="text-align-center">{{--{{ $internships->name }}--}} Stage aan het bekijken</h1>

    <div class="jumbotron text-center">
    <div class=" text-center">
        <h2>Stage</h2>
        <p><strong>Begin datum:</strong> {{ $internships->begin_DATE }}</p>
        <p><strong>Eind datum:</strong>{{ $internships->eind_DATE }}</p>

    </div>
        <div class="text-align-center">
            <a class="btn btn-small btn-primary" href="{{ URL::to('internships') }}">Terug naar alle Stages</a>

        </div>
    </div>

    </div>
@stop