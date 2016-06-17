@extends('admin.master')

@section('content')


    <li><a href="{{ route('tool.index') }}">Bekijk alle Tools</a></li>
    <li><a href="{{ route('tool.create') }}">Maak een Tool aan</a></li>

    <h2>Maak een Tool aan</h2>

{{--    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}--}}

    {{ Form::open(array('route' => 'tool.store')) }}

    @include('tools.forms.form')

    {{ Form::close() }}


@endsection
