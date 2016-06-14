@extends('layouts.ap')

@section('content')

    @foreach ($internships as $internship)
        <ul>
            <li>{{ $internship->begin_DATE }}</li>
            <li>{{ $internship->eind_DATE }}</li>
            <li>{{ $internship->contact_id }}</li>
            <li>{{ $internship->status_id }}</li>
            <li>{{ $internship->study_id }}</li>
        </ul>
    @endforeach

@endsection





