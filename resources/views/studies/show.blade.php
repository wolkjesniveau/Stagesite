@extends('master')

@section('content')


    <li><a href="{{ URL::to('studiesIndex') }}">Bekijk alle opleidingen</a></li>
    <li><a href="{{ URL::to('studiesCreate') }}">Maak een opleiding aan</a></li>
        {{--
                <h1>Showing {{ $tools->naam }}</h1>--}}

        <div class="jumbotron text-center">
            <h2>{{ $studies->name_study }}</h2>
            <p>
                <strong>School Locatie:</strong> {{ $studies->school_location_id }} <br>
                <strong>Cohort:</strong> {{ $studies->cohort_id }} <br>
                <strong>Crebo:</strong> {{ $studies->crebo_id }} <br>
            </p>

            <a class="btn btn-small btn-primary" href="{{ route('studies.edit', $studies->id) }}">Bewerk deze Opleiding</a>
        </div>


@endsection
