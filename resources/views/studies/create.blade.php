@extends('admin.master')

@section('content')


    <h2>Maak een opleiding aan</h2>

    <div class="form-group col-md-12 jumbotron text-center">
        {{ Form::open(array('route' => 'study.store')) }}

        @include('studies.forms.form')

        {{ Form::close() }}
    </div>

    <div class="text-align-center">
        <a class="btn btn-primary" href="{{ route('study.index') }}">Terug naar alle opleidingen</a>
    </div>
@endsection
