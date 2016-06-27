@extends('admin.master')

@section('content')


    <h2 class="text-align-center">Maak een School aan</h2>

    <div class="form-group col-md-12 jumbotron text-center">

    {{ Form::open(array('url' => 'schools')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Verzenden', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
</div>

@endsection