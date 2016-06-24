@extends('master')

@section('content')
    <li><a href="{{ URL::to('internship') }}">Overzicht van Stages</a></li>
    <li><a href="{{ URL::to('companies') }}">Overzicht van bedrijven</a></li>
    <li><a href="{{ URL::to('schools') }}">Overzicht van scholen</a></li>
    <li><a href="{{ URL::to('studies') }}">Overzicht van Opleidingen</a></li>
    <li><a href="{{ URL::to('tools') }}">Overzicht van Tools</a></li>
@endsection