@extends('admin.master')

@section('title',"Overzicht van " . "$company->naam")

@section('content')

    <div class="jumbotron text-center">
        <h2 class="text-align-center">{{ $company->naam }}</h2>
            <p><strong>Address: </strong>{{ $company->address }}</p>
            <p><strong>Plaats: </strong>{{ $company->plaats }}</p>
            <p><strong>Postcode: </strong>{{ $company->postcode }}</p>
            <p><strong>Telefoonnummer: </strong>{{ $company->telnr }}</p>
    </div>
    <div class="text-align-center">
        <a class="btn btn-small btn-primary" href="{{ URL::to('companies') }}">Terug naar alle Bedrijven</a>

    </div>
@stop