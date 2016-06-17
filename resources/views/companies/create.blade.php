@extends('master')

@section('title')
    Admin Bedrijven overzicht
@stop

@section('content')

    <h1>Admin bedrijven pagina</h1>

    {{ Form::open(['route' => 'companies.store']) }}

    <div class="form-group">
        {{ Form::label('naam', 'Naam: ') }}
        {{ Form::text('naam', ('Naam'),['class' => 'form-control']) }}
    </div>,

    <div class="form-group">
        {{ Form::label('address', 'address: ') }}
        {{ Form::text('address', ('Address'), ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('postcode', 'Postcode: ') }}
        {{ Form::text('postcode',('Postcode'),['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('plaats', 'Plaats: ') }}
        {{ Form::text('plaats',('Plaats'), ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('telnr', 'Telefoonnummer: ') }}
        {{ Form::text('telnr',('Telefoonnummer'), ['class' => 'form-control']) }}
    </div>

    {{ Form::submit('Verzenden', ['class' => 'btn btn-primary']) }}

    {{ Form::close() }}
@stop

@section('footer')
    <p>footer</p>
@stop