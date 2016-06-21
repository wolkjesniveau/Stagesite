@extends('admin.master')

@section('title')
    Admin Bedrijven overzicht
@stop

@section('content')

    <<h1>Edit {{ $company->naam }}</h1>

    {{ Form::model($company, (['route' => (['companies.update', $company->id]), 'method' => 'PUT'])) }}

    @include('companies.forms.form')

    {{ Form::close() }}
@stop

@section('footer')
    <p>footer</p>
@stop