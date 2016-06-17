@extends('master')

@section('content')

    <h2>Overzicht van alle opleidingen</h2>

@foreach ($studies as $study)
        <ul>
        <li>Locatie ID: {{ $study->location_id }}</li>
        <li>Cohort ID:  {{ $study->cohort_id }}</li>
            <li>Crebo ID:  {{ $study->crebo_id }}</li>
            <li>Aangemaakt op:  {{ $study->created_at }}</li>
            <li>Veranderd op:   {{ $study->	updated_at }}</li>
        </ul>
@endforeach
@endsection





