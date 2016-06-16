@extends('layouts.ap')

@section('content')

    <div class="form-group col-md-12">

        {{ Form::model($tools, array('route' => ['tool.edit', $tools->id])) }}
        <div class="col-md-6">
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
        {{ Form::submit('Update Tool!') }}
        </div>
        {{ Form::close() }}
        </div>
    </div>

@endsection
