@extends('layouts.app')

@section('content')

    <ul>
        @foreach($internships as $internship)
            <li>{{ $internship->body }}</li>
        @endforeach
    </ul>

@endsection





