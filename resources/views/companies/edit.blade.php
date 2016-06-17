@extends('master')

@section('title')
    Admin Bedrijven overzicht
@stop

@section('content')

    <h1>Edit {{ $company->naam }}</h1>

    {!! Form::open(['route' => ['companies.update', $company->id], 'method' => 'put']) !!}

    <div class="form-group">
        {{ Form::label('naam', 'Naam: ') }}
        {{ Form::text('naam', $company->naam, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Address: ') }}
        {{ Form::text('address', $company->address, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('postcode', 'Postcode: ') }}
        {{ Form::text('postcode', $company->postcode, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('plaats', 'Plaats: ') }}
        {{ Form::text('plaats', $company->plaats, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('telnr', 'Telefoonnummer: ') }}
        {{ Form::text('telnr', $company->telnr,['class' => 'form-control']) }}
    </div>

    {{ Form::submit('Wijzigen', ['class' => 'btn btn-primary']) }}

    {{ Form::close() }}
@stop

@section('footer')
    <p>footer</p>
@stop