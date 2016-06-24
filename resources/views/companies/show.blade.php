@extends('master')

@section('title', "$company->naam")

@section('content')

    <div class="jumbotron text-center">
        <h1>{{ $company->naam }}</h1>
            <p>Address: {{ $company->address }}</p><br>
            <p>Plaats: {{ $company->plaats }}</p><br>
            <p>Postcode: {{ $company->postcode }}</p><br>
            <p>Tellefoonnummer: {{ $company->telnr }}</p>
    </div>
@stop