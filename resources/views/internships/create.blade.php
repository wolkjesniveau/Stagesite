@extends('admin.master')

@section('title')
    Stage's overzicht
@stop

@section('content')

    <h1>Create new internship</h1>

    {{ Form::open(['route' => 'internships.store']) }}

    @include('internships.forms.form')

    {{ Form::close() }}
@stop

@section('footer')
    <p>footer</p>
@stop