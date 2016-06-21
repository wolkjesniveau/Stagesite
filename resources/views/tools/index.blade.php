@extends('admin.master')

@section('content')

    <h2 class="pagetitle">Overzicht van alle Tools</h2>


    @if (@Auth::user()->role_id > 3)
    <a class="btn btn-small btn-primary" href="{{ route('tool.create') }}">Maak een Tool aan</a>
    @endif

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
                    <td class="mw86">{{ $value->naam }}</td>
                    <td class="mw810">{{ $value->omschrijving }}</td>


                    <td>

                        <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                        <a class="btn btn-small btn-primary" href="{{ route('tool.show', $value->id) }}">Show</a>

                        @if (@Auth::user()->role_id > 3)
                        <!-- edit this Tool (uses the edit method found at GET /nerds/{id}/edit -->
                        <a class="btn btn-small btn-primary mr4" href="{{ route('tool.edit', $value->id) }}">Edit</a>

                        <!-- delete the tool (uses the destroy method DESTROY /nerds/{id} -->
                        <!-- we will add this later since its a little more complicated than the other two buttons -->
                        {{ Form::open(array('route' => ['tool.destroy', $value->id], 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>

@endsection





