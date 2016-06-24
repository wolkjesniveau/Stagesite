@extends('admin.master')

@section('content')

<div class="">
    <div class="col-md-12">


    </div>
</div>

                <h1>{{ $study->name_study }} aan het bekijken</h1>

        <div class="jumbotron text-center">
            <h2>{{ $study->name_study }}</h2>
            <p>
                <strong>School Locatie:</strong> {{ $study->school_location_id }} <br>
                <strong>Cohort:</strong> {{ $study->cohort_id }} <br>
                <strong>Crebo:</strong> {{ $study->crebo_id }} <br>
            </p>


            @if (@Auth::user()->role_id > 3)
            <a class="btn btn-small btn-primary" href="{{ route('study.edit', $study->id) }}">Bewerk deze Opleiding</a>
            @endif
        </div>

        <div class="text-align-center">
            <a class="btn btn-primary" href="{{ route('study.index') }}">Terug naar alle opleidingen</a>
        </div>
@endsection
