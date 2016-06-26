
@extends('admin.master')

@section('content')


    <h2 CLASS="text-align-center">Maak een User aan</h2>

    <div class="form-group col-md-12 jumbotron text-center">
   <!-- if there are creation errors, they will show here -->
    {{--{{ HTML::ul($errors->all()) }}--}}

    {{ Form::open(array('route' => 'user.store')) }}

    @include('users.forms.form')

    {{ Form::close() }}

    </div>
@endsection
