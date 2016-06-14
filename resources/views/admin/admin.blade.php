@extends('layouts.ap')

@section('content')
    <li><a href="{{ route('internshipAdmin') }}">Overzicht van Stages</a></li>
    <li><a href="{{ route('companiesAdmin') }}">Overzicht van bedrijven</a></li>
    <li><a href="{{ route('studiesAdmin') }}">Overzicht van Opleidingen</a></li>
@endsection