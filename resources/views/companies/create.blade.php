@extends('admin.master')

@section('title')
    Admin Bedrijven overzicht
@stop

@section('content')

    <h1>Admin bedrijven pagina</h1>

    {{ Form::open(array('route' => 'companies.store')) }}

    @include('companies.forms.form')

    {{ Form::close() }}
@stop

@section('footer')
    <p>footer</p>
@stop