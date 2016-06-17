@extends('admin.master')

@section('content')
    <li><a href="{{ route('tool.index') }}">Bekijk alle Tools</a></li>
    <li><a href="{{ route('tool.create') }}">Maak een Tool aan</a></li>

    <div class="form-group col-md-12 jumbotron text-center">

        {{ Form::model($tool, array('route' => ['tool.update', $tool->id], 'method' => 'put')) }}

        @include('tools.forms.form')

        {{ Form::close() }}
        </div>
    </div>

@endsection
