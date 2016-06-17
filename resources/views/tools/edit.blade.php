@extends('layouts.app')

@section('content')
    <li><a href="{{ route('tool.index') }}">Bekijk alle Tools</a></li>
    <li><a href="{{ route('tool.create') }}">Maak een Tool aan</a></li>

    <div class="form-group col-md-12 jumbotron text-center">

        {{ Form::model($tool, array('route' => ['tool.update', $tool->id], 'method' => 'put')) }}
        <div class="col-md-12">
                <!-- name -->
        <div class="col-md-12 ">
        {{ Form::label('naam', 'Naam:') }}
            <br>
        {{ Form::text('naam') }}
        </div>
                <!-- omschrijving -->
        <div class="col-md-12">
        {{ Form::label('omschrijving', 'Omschrijving:') }}
            <br>
        {{ Form::textarea('omschrijving') }}
        </div>
        <div class="col-md-12">
        {{ Form::submit('Update Tool!')}}
        </div>
        {{ Form::close() }}
        </div>
    </div>

@endsection
