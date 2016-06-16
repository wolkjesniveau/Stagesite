@extends('layouts.ap')

@section('content')

    <div class="form-group col-md-12">
    {{ Form::open(array('url' => 'admin.tools-edit', 'files' => true)) }}
    {{ Form::label('Naam:') }}
    {{ Form::text('naam') }}
    <br>
    {{ Form::label('Omschrijving:') }}
    {{ Form::text('omschrijving') }}
    <br>
    {{ Form::submit('submit') }}
    {{ Form::close() }}
</div>

@endsection