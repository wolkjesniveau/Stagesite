@extends('master')

@section('title')
    Admin Bedrijven overzicht
@stop

@section('content')

    <h1>Admin bedrijven pagina</h1>

    {{ Form::open(array('route' => 'companies')) }}

    <div class="form-group">
        {{ Form::label('naam', 'Naam: ') }}
        {{ Form::text('naam', Input::old('naam'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'address: ') }}
        {{ Form::email('address', Input::old('address'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('postcode', 'Postcode: ') }}
        {{ Form::select('postcode', Input::old('postcode'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('plaats', 'Plaats: ') }}
        {{ Form::select('plaats', Input::old('plaats'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('telnr', 'Telefoonnummer: ') }}
        {{ Form::select('telnr', Input::old('telnr'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Verzenden', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@stop

@section('footer')
    <p>footer</p>
@stop