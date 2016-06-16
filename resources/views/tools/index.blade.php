@extends('layouts.app')

@section('content')

    <h2 class="pagetitle">Overzicht van alle Tools</h2>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Naam</td>
                <td>Omschrijving</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($tools as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->naam }}</td>
                    <td>{{ $value->omschrijving }}</td>


                    <td>

                        <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                        <!-- we will add this later since its a little more complicated than the other two buttons -->

                        <!-- show the nerd (uses the show method found at GET /nerds/{id} -->

                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                        <a class="btn btn-small btn-info" href="{{ route('tools-edit', $value->id) }}">Edit this Tool</a>

                    </td>
                </tr>
            @endforeach
            </tbody>

@endsection





