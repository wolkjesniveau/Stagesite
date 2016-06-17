@extends('layouts.app')

@section('content')
    <li><a href="{{ URL::to('internshipAdmin') }}">Overzicht van Stages</a></li>
    <li><a href="{{ URL::to('companies') }}">Overzicht van bedrijven</a></li>
    <li><a href="{{ URL::to('schoolsAdmin') }}">Overzicht van scholen</a></li>
    <li><a href="{{ URL::to('studiesAdmin') }}">Overzicht van Opleidingen</a></li>
    <li><a href="{{ URL::to('toolsIndex') }}">Overzicht van Tools</a></li>
@endsection