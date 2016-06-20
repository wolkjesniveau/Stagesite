@extends('master')

@section('content')
    <li><a href="{{ URL::to('internship.index') }}">Overzicht van Stages</a></li>
    <li><a href="{{ URL::to('companies.index') }}">Overzicht van bedrijven</a></li>
    <li><a href="{{ URL::to('schools.index') }}">Overzicht van scholen</a></li>
    <li><a href="{{ URL::to('studies.index') }}">Overzicht van Opleidingen</a></li>
    <li><a href="{{ URL::to ('tools.index') }}">Overzicht van Tools</a></li>
@endsection