@extends('layouts.app')

@section('content')


    <li><a href="{{ route('tool.index') }}">Bekijk alle Tools</a></li>
    <li><a href="{{ route('tool.create') }}">Maak een Tool aan</a></li>

    <h2>Maak een Tool aan</h2>

{{--    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}--}}

    {{ Form::open(array('route' => 'tool.store')) }}

    <div class="form-group">
        {{ Form::label('naam', 'Naam') }}
        {{ Form::text('naam', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('omschrijving', 'Omschrijving') }}
        {{ Form::text('omschrijving', null, array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Create the Tool!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


@endsection
