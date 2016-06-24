@extends('master')

@section('title')
    Admin Bedrijven overzicht
@stop

@section('content')

    <h1>Create new company</h1>

    {{ Form::open(['route' => 'admin.companies.store']) }}

    @include('companies.forms.form')

    {{ Form::close() }}
@stop

@section('footer')
    <p>footer</p>
@stop