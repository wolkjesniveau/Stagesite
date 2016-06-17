@extends('layouts.app')

@section('content')


    <li><a href="{{ URL::to('toolsIndex') }}">Bekijk alle Tools</a></li>
    <li><a href="{{ URL::to('toolsCreate') }}">Maak een Tool aan</a></li>

    <h2>Maak een Tool aan</h2>

{{--    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}--}}

    {{ Form::open(array('url' => 'toolsIndex')) }}

    <div class="form-group">
        {{ Form::label('naam', 'Naam') }}
        {{ Form::text('naam', \Illuminate\Support\Facades\Input::old('naam'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('omschrijving', 'Omschrijving') }}
        {{ Form::text('omschrijving', \Illuminate\Support\Facades\Input::old('omschrijving'), array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Create the Tool!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


@endsection
