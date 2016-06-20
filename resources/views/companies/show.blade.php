@extends('master')

@section('title', "$company->naam")

@section('content')

    <div class="jumbotron text-center">
        <h2>{{ $company->naam }}</h2>
        <p>
            <p>Address:</p> {{ $company->address }}<br>
            <p>Plaats:</p> {{ $company->plaats }}<br>
            <p>Postcode:</p> {{ $company->postcode }}<br>
            <p>Tellefoonnummer:</p> {{ $company->telnr }}
        </p>
    </div>
@stop