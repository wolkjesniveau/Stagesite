@extends('admin.master')

@section('content')

    <h1 class="text-align-center">{{ $user->name }} aan het bewerken</h1>

    <div class="form-group col-md-12 jumbotron text-center">

        {{ Form::model($user, array('route' => ['user.update', $user->id], 'method' => 'put')) }}

        @include('users.forms.form')

        {{ Form::close() }}


        </div>

    <div class="text-align-center">
        <a class="btn btn-primary" href="{{ route('user.index') }}">Terug naar alle Users</a>
    </div>

@endsection
