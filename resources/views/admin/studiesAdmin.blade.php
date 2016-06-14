@extends('layouts.ap')

@section('content')


@foreach ($studies as $study)
        <ul>
        <li>{{ $study->location_id }}</li>
        <li>{{ $study->cohort_id }}</li>
            <li>{{ $study->created_at }}</li>
            <li>{{ $study->	updated_at }}</li>
        </ul>
@endforeach
@endsection





