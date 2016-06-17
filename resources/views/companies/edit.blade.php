@extends('master')

@section('title')
    Admin Bedrijven overzicht
@stop

@section('content')

    <<h1>Edit {{ $company->naam }}</h1>

    {{ Form::model($company, array('route' => array('companies.update', $company->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('naam', 'Naam: ') }}
        {{ Form::text('naam', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Address: ') }}
        {{ Form::email('address', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('plaats', 'Plaats: ') }}
        {{ Form::select('plaats', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('telnr', 'Telefoonnummer: ') }}
        {{ Form::select('telnr', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Wijzigen', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@stop

@section('footer')
    <p>footer</p>
@stop