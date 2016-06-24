@extends('master')

@section('title')
    Admin Bedrijven overzicht
@stop

@section('content')   <h1>All the Schools</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

<a class="btn btn-small btn-info" href="{{ URL::to('schools/create') }}">Create School</a>


    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
        </tr>
        </thead>
        <tbody>
            @foreach($schools as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>

                    <!-- we will also add show, edit, and delete buttons -->
                    <td>

                        <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                        <!-- we will add this later since its a little more complicated than the other two buttons -->
                        {{ Form::open(array('url' => 'schools/' . $value->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete this School', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}

                                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                        <a class="btn btn-small btn-success" href="{{ URL::to('schools/show/' . $value->id) }}">Show this School</a>

                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                        <a class="btn btn-small btn-info" href="{{ URL::to('schools/edit/' . $value->id) }}">Edit this School</a>

                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection