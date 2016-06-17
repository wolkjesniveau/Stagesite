@extends('master')

@section('content')

<div class="">
    <div class="col-md-12">
        <li><a href="{{ route('study.index') }}">Bekijk alle opleidingen</a></li>
        <li><a href="{{ route('study.create') }}">Maak een opleiding aan</a></li>
    </div>
</div>
        {{--
                <h1>Showing {{ $tools->naam }}</h1>--}}

        <div class="jumbotron text-center">
            <h2>{{ $study->name_study }}</h2>
            <p>
                <strong>School Locatie:</strong> {{ $study->school_location_id }} <br>
                <strong>Cohort:</strong> {{ $study->cohort_id }} <br>
                <strong>Crebo:</strong> {{ $study->crebo_id }} <br>
            </p>

            <a class="btn btn-small btn-primary" href="{{ route('study.edit', $study->id) }}">Bewerk deze Opleiding</a>
        </div>


@endsection
