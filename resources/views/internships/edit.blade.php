@extends('admin.master')

@section('title')
    Stage's overzicht
@stop

@section('content')

    <h1 class="text-align-center">Bewerken {{ $internships->naam }}</h1>

    <div class="form-group col-md-12 jumbotron text-center">


    {{ Form::model($internships, (['route' => (['internships.update', $internships->id]), 'method' => 'PUT'])) }}

    @include('internships.forms.form')

    {{ Form::close() }}

        </div>
@stop

@section('footer')
    <p>footer</p>
@stop