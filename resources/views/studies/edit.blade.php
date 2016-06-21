@extends('admin.master')

@section('content')

    <h1>{{ $study->name_study }} aan het bewerken</h1>
    <div class="form-group col-md-12 jumbotron text-center">

        {{ Form::model($study, array('route' => ['study.store', $study->id])) }}


        @include('studies.forms.form')

            {{ Form::close() }}
        </div>
    </div>

    <div class="text-align-center">
        <a class="btn btn-primary" href="{{ route('study.index') }}">Terug naar alle opleidingen</a>
    </div>
@endsection
