@extends('master')

@section('content')


    <li><a href="{{ URL::to('studiesIndex') }}">Bekijk alle opleidingen</a></li>
    <li><a href="{{ URL::to('studiesCreate') }}">Maak een opleiding aan</a></li>

        <h2>Maak een opleiding aan</h2>

{{--
        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}
--}}

        {{ Form::open(array('url' => 'studiesEdit')) }}

        <div class="form-group">
            {{ Form::label('name_study', 'Naam') }}
            {{ Form::text('name_study', \Illuminate\Support\Facades\Input::old('naam'), array('class' => 'form-control')) }}
        </div>

    <div class="form-group">
        {{ Form::label('school_location_id', 'School locatie') }}
        {{ Form::text('school_location_id', \Illuminate\Support\Facades\Input::old('school_location_id'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('cohort_id', 'Cohort') }}
        {{ Form::text('cohort_id', \Illuminate\Support\Facades\Input::old('cohort_id'), array('class' => 'form-control')) }}
    </div>

        <div class="form-group">
            {{ Form::label('crebo_id', 'Crebo') }}
            {{ Form::text('crebo_id', \Illuminate\Support\Facades\Input::old('crebo_id'), array('class' => 'form-control')) }}
        </div>


    {{ Form::submit('Maak opleiding aan!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


@endsection
