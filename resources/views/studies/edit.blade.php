@extends('master')

@section('content')
    <li><a href="{{route('study.index') }}">Bekijk alle opleidingen</a></li>
    <li><a href="{{ route('study.create') }}">Maak een opleiding aan</a></li>

    <div class="form-group col-md-12 jumbotron text-center">

        {{ Form::model($study, array('route' => ['study.store', $study->id])) }}
        <div class="col-md-12">
            <!-- name -->
            <div class="col-md-12 ">
                {{ Form::label('name_study', 'Naam:') }}
                <br>
                {{ Form::text('name_study') }}
            </div>

            <div class="col-md-12 ">
                {{ Form::label('school_location_id', 'School locatie:') }}
                <br>
                {{ Form::text('school_location_id') }}
            </div>

            <div class="col-md-12 ">
                {{ Form::label('cohort_id', 'Cohort:') }}
                <br>
                {{ Form::text('cohort_id') }}
            </div>

            <div class="col-md-12 ">
                {{ Form::label('crebo_id', 'Crebo:') }}
                <br>
                {{ Form::text('crebo_id') }}
            </div>

            <div class="col-md-12">
                {{ Form::submit('Update Opleiding!')}}
            </div>
            {{ Form::close() }}
        </div>
    </div>

@endsection
