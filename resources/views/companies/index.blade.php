@extends('master')

@section('title')
    Admin Bedrijven overzicht
@stop

@section('content')
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Naam</td>
            <td>Address</td>
            <td>Postcode</td>
            <td>Plaats</td>
            <td>Telefoonnummer</td>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->naam }}</td>
                <td>{{ $company->address }}</td>
                <td>{{ $company->postcode }}</td>
                <td>{{ $company->plaats }}</td>
                <td>{{ $company->telnr }}</td>

                {{--Edit, delete, create buttons--}}
                <td>

                    <!-- Delete button -->
                    {{ Form::open(['url' => 'admin/companies/' . $company->id, 'class' => 'pull-right']) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Verwijderen', ['class' => 'btn btn-warning']) }}
                    {{ Form::close() }}

                    <!-- Show button -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('admin/companies/show', $company->id) }}">Laat bedrijf zien</a>
                    <!-- Edit button -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('admin/companies/edit', $company->id) }}">Wijzigen</a>

                </td>
            </tr>
        @endforeach
        </tbody>
        <a class="btn btn-small btn-info" href="{{ URL::to('admin/companies/create')}}">Maak nieuw bedrijf aan</a>
    </table>
@stop

@section('footer')
    <p>footer</p>
@stop