@extends('master')

@section('title', "$comapny->naam")

@section('content')

    <div class="jumbotron text-center">
        <h2>{{ $company->naam }}</h2>
        <p>
            <strong>Address:</strong> {{ $company->address }}<br>
            <strong>Plaats:</strong> {{ $company->plaats }}<br>
            <strong>Postcode:</strong> {{ $company->postcode }}<br>
            <strong>Tellefoonnummer:</strong> {{ $company->telnr }}
        </p>
    </div>
@stop