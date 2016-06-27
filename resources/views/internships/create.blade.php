@extends('admin.master')

@section('title')
    Stage's overzicht
@stop

@section('content')

    <h2 class="text-align-center">Maak een Stage aan</h2>

    <div class="form-group col-md-12 jumbotron text-center">
    {{ Form::open(['route' => 'internships.store']) }}

    @include('internships.forms.form')

    {{ Form::close() }}

        </div>
@stop

@section('footer')
    <p>footer</p>
@stop