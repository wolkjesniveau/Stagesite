@extends('layouts.app')

@section('content')

    <h2 class="pagetitle">Overzicht van alle Tools</h2>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Naam</td>
                <td>Omschrijving</td>
                <td>Acties</td>
            </tr>
            </thead>
            <tbody>
            @foreach($tools as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->naam }}</td>
                    <td class="mw850">{{ $value->omschrijving }}</td>


                    <td>

                        <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                        <!-- we will add this later since its a little more complicated than the other two buttons -->
                        {{ Form::open(array('url' => 'toolsIndex/' . $value->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}

                        <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                        <a class="btn btn-small btn-primary" href="{{ route('tools.show', $value->id) }}">Show</a>


                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                        <a class="btn btn-small btn-primary mr4" href="{{ route('tools.edit', $value->id) }}">Edit</a>

                    </td>
                </tr>
            @endforeach
            </tbody>

@endsection





