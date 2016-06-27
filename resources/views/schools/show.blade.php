@extends('admin.master')

@section('content')


    <h1>{{ $school->name }} aan het bekijken</h1>

    <div class="jumbotron text-center">
        <h2><strong>Naam: </strong>{{ $school->name }}</h2>

    </div>
    <div class="text-align-center">
        <a class="btn btn-small btn-primary" href="{{ URL::to('schools') }}">Terug naar alle Scholen</a>

    </div>
@endsection