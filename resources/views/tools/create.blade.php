@extends('layouts.app')

@section('content')


    <li><a href="{{ URL::to('toolsIndex') }}">View All Tools</a></li>
    <li><a href="{{ URL::to('toolsCreate') }}">Create a Tool</a>

    <h2>Create a Tool</h2>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'toolsEdit')) }}

    <div class="form-group">
        {{ Form::label('naam', 'Naam') }}
        {{ Form::text('naam', Input::old('naam'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('omschrijving', 'Omschrijving') }}
        {{ Form::email('omschrijving', Input::old('omschrijving'), array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Create the Tool!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


@endsection
