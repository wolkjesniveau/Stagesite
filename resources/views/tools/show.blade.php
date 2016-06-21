@extends('admin.master')

@section('content')



    <h1 class="text-align-center">{{ $tool->naam }} aan het bekijken</h1>

        <div class="jumbotron text-center">
            <h2>{{ $tool->naam }}</h2>
            <p>
                <strong>Omschrijving:</strong> {{ $tool->omschrijving }}
            </p>
            @if (@Auth::user()->role_id > 4)
            <a class="btn btn-small btn-primary" href="{{ route('tool.edit', $tool->id) }}">Bewerk deze Tool</a>
                @endif
        </div>
    <div class="text-align-center">
        <a class="btn btn-small btn-primary" href="{{ route('tool.index') }}">Terug naar alle Tools</a>

    </div>
@endsection
