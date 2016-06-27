@extends('admin.master')

@section('content')



        <h1 class="text-align-center">{{ $school->name }} aan het bewerken</h1>

        <!-- if there are creation errors, they will show here -->
        {{--{{ HTML::ul($errors->all()) }}--}}

        {{ Form::model($school, array('route' => array('schools.update', $school->id), 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>


        {{ Form::submit('Edit the School!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}


@endsection