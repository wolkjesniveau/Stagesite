@extends('admin.master')

@section('title')
    Stage's overzicht
@stop

@section('content')

    <h1>Edit {{ $internships->naam }}</h1>

    {{ Form::model($internships, (['route' => (['internships.update', $internships->id]), 'method' => 'PUT'])) }}

    @include('internships.forms.form')

    {{ Form::close() }}
@stop

@section('footer')
    <p>footer</p>
@stop