@extends('admin.master')

@section('content')
    <li><a href="{{route('study.index') }}">Bekijk alle opleidingen</a></li>
    <li><a href="{{ route('study.create') }}">Maak een opleiding aan</a></li>

    <div class="form-group col-md-12 jumbotron text-center">

        {{ Form::model($study, array('route' => ['study.store', $study->id])) }}


        @include('studies.forms.form')

            {{ Form::close() }}
        </div>
    </div>

@endsection
