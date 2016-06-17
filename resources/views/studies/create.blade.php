@extends('admin.master')

@section('content')


    <li><a href="{{route('study.index') }}">Bekijk alle opleidingen</a></li>
    <li><a href="{{ route('study.create') }}">Maak een opleiding aan</a></li>

    <h2>Maak een opleiding aan</h2>

    {{ Form::open(array('route' => 'study.store')) }}

    @include('studies.forms.form')

    {{ Form::close() }}


@endsection
