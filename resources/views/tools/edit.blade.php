@extends('layouts.ap')

@section('content')

    <div class="form-group col-md-12">
        {{--    {{ Form::open(array('url' => 'admin.tools-edit', 'files' => true)) }}
            {{ Form::label('Naam:') }}
            {{ Form::text('naam') }}
            <br>
            {{ Form::label('Omschrijving:') }}
            {{ Form::text('omschrijving') }}
            <br>
            {{ Form::submit('submit') }}
            {{ Form::close() }}--}}


        {{ Form::model($tools, array('route' => 'tool.edit', $tools->id)) }}

                <!-- name -->
        {{ Form::label('naam', 'Naam') }}
        {{ Form::text('naam') }}

                <!-- omschrijving -->
        {{ Form::label('omschrijving', 'Omschrijving') }}
        {{ Form::email('omschrijving') }}

        {{ Form::submit('Update Tool!') }}

        {{ Form::close() }}

    </div>

@endsection