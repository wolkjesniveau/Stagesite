@extends('master')

@section('title',"Overzicht van " . "$company->naam")

@section('content')

    <div class=" text-center">
        <h1>{{ $company->naam }}</h1>
            <p>Address: {{ $company->address }}</p>
            <p>Plaats: {{ $company->plaats }}</p>
            <p>Postcode: {{ $company->postcode }}</p>
            <p>Telefoonnummer: {{ $company->telnr }}</p>
    </div>
@stop