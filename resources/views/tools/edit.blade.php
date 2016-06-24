@extends('admin.master')

@section('content')

    <h1 class="text-align-center">{{ $tool->naam }} aan het bewerken</h1>

    <div class="form-group col-md-12 jumbotron text-center">

        {{ Form::model($tool, array('route' => ['tool.update', $tool->id], 'method' => 'put')) }}

        @include('tools.forms.form')

        {{ Form::close() }}


        </div>

    <div class="text-align-center">
        <a class="btn btn-primary" href="{{ route('tool.index') }}">Terug naar alle Tools</a>
    </div>

@endsection
