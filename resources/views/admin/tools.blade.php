@extends('layouts.ap')

@section('content')

    <h2 class="pagetitle">Overzicht van alle Tools</h2>

    @foreach ($tools as $tool)
        <div class="col-md-6">
            <h3>{{ $tool->naam }}</h3>
            <p>{{ $tool->omschrijving }}</p>
            <a href="{{ route('tools-edit') }}">Bewerken</a>
        </div>
    @endforeach

@endsection





