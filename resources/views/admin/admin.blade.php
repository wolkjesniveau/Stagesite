@extends('layouts.app')

@section('content')
    <li><a href="{{ route('internshipAdmin') }}">Overzicht van Stages</a></li>
    <li><a href="{{ route('companiesAdmin') }}">Overzicht van bedrijven</a></li>
    <li><a href="{{ route('schoolsAdmin') }}">Overzicht van scholen</a></li>
@endsection