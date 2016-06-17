@extends('master.blade.php')

@section('content')
    <li><a href="{{ URL::to('toolsIndex') }}">Bekijk alle Tools</a></li>
    <li><a href="{{ URL::to('toolsCreate') }}">Maak een Tool aan</a></li>

    <div class="form-group col-md-12 jumbotron text-center">

        {{ Form::model($tools, array('route' => ['tools.index', $tools->id])) }}
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
