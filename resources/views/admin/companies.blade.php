@extends('master')

@section('title')
    Admin Bedrijven overzicht
@stop

@section('content')

    <h1>Admin bedrijven pagina</h1>

    <div class="form-group">
        {!! Form::label('naam','Naam van het bedrijf: ') !!}}
        {!! Form::text('naam', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address','Address van het bedrijf: ') !!}}
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('postcode','Postcode van het bedrijf: ') !!}}
        {!! Form::text('postcode', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('plaats','Plaats van het bedrijf: ') !!}}
        {!! Form::text('plaats', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telnr','Telefoonnummer van het bedrijf: ') !!}}
        {!! Form::text('telnr', null, ['class' => 'form-control']) !!}
    </div>

@stop

@section('footer')
    <p>footer</p>
@stop