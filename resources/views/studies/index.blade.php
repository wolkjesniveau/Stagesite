@extends('master')

@section('content')

    <h2 class="pagetitle">Overzicht van alle Opleidingen</h2>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Naam</td>
            <td>School Locatie</td>
            <td>Cohort</td>
            <td>Crebo</td>
            <td>Acties</td>
        </tr>
        </thead>
        <tbody>
        @foreach($studies as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name_study }}</td>
                <td>{{ $value->school_location_id }}</td>
                <td>{{ $value->cohort_id }}</td>
                <td>{{ $value->crebo_id }}</td>


                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('route' => ['study.destroy', $value->id], 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}

                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-primary" href="{{ route('study.show', $value->id) }}">Show</a>


                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-primary mr4" href="{{ route('study.edit', $value->id) }}">Edit</a>

                </td>
            </tr>
        @endforeach
        </tbody>

@endsection





