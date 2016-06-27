@extends('admin.master')


@section('content')

    <div class=" text-center">
        <h1>Stage</h1>
        <p>Begin datum: {{ $internships->begin_DATE }}</p>
        <p>Eind datum: {{ $internships->eind_DATE }}</p>
    </div>
@stop