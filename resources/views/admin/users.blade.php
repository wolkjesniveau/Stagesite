@extends('layouts.ap')

@section('content')

    <h2>Overzicht van alle gebruikers</h2>

    @foreach ($users as $user)
    <p>{{ $user->name }}</p>
    @endforeach

@endsection