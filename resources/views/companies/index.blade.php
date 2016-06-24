@extends('master')

@section('title')
    Bedrijven overzicht
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
            <td>Acties</td>
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

                <td>
                    <!-- Show button -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('admin/companies/show', $company->id) }}">Laat bedrijf zien</a>

                    {{--Admin Buttons na role check--}}
                    @if (@Auth::user()->role_id > 3)

                        <!-- Delete button -->
                    {{ Form::open(['url' => 'companies/' . $company->id, 'class' => 'pull-right']) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Verwijderen', ['class' => 'btn btn-warning']) }}
                    {{ Form::close() }}


                    <!-- Edit button -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('admin/companies/edit', $company->id) }}">Wijzigen</a>
                </td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('admin/companies/create')}}">Maak nieuw bedrijf aan</a>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('footer')
    <p>footer</p>
@stop