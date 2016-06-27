
@extends('admin.master')

@section('content')


    <h2 class="text-align-center">Maak een Tool aan</h2>

    <div class="form-group col-md-12 jumbotron text-center">


    {{ Form::open(array('route' => 'tool.store')) }}

    @include('tools.forms.form')

    {{ Form::close() }}

    </div>
@endsection
