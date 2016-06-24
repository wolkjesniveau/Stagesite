@extends('admin.master')

@section('title')
    Stage overzicht
@stop

@section('content')
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Begin datum</td>
            <td>Eind datum</td>
        </tr>
        </thead>
        <tbody>
        @foreach($internships as $internship)
            <tr>
                <td>{{ $internship->id }}</td>
                <td>{{ $internship->begin_DATE }}</td>
                <td>{{ $internship->eind_DATE }}</td>
                <td>
                    <!-- Show button -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('admin/internships/show', $internship->id) }}">Laat stage zien</a>

                    {{--Admin Buttons na role check--}}
                    @if (@Auth::user()->role_id > 3)

                            <!-- Delete button -->
                    {{ Form::open(['url' => 'internships/' . $internship->id, 'class' => 'pull-right']) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Verwijderen', ['class' => 'btn btn-warning']) }}
                    {{ Form::close() }}


                            <!-- Edit button -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('admin/internships/edit', $internship->id) }}">Wijzigen</a>
                </td>
                <a class="btn btn-small btn-info" href="{{ URL::to('admin/internships/create')}}">Maak nieuwe stage aan</a>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('footer')
    <p>footer</p>
@stop