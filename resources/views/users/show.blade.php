@extends('admin.    master')

@section('title',"$user->name" . " aan het bekijken")


@section('content')



    <h1 class="text-align-center">{{ $user->name }} aan het bekijken</h1>

        <div class="jumbotron text-center">
            <h2>{{ $user->name }}</h2>
            <p>
                <strong>E-mail:</strong> {{ $user->email }}            </p>
            <p>    <strong>Role:</strong> {{ $user->role_id }}
            </p>
            @if (@Auth::user()->role_id > 4)
            <a class="btn btn-small btn-primary" href="{{ route('user.edit', $user->id) }}">Bewerk deze User</a>
                @endif
        </div>
    <div class="text-align-center">
        <a class="btn btn-small btn-primary" href="{{ route('user.index') }}">Terug naar alle Users</a>

    </div>
@endsection
