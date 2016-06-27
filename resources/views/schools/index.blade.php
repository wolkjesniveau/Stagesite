@extends('admin.master')

@section('title')
    Admin Bedrijven overzicht
@stop

@section('content')
    <h2 class="pagetitle">Overzicht van scholen</h2>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

<a class="btn btn-small btn-primary" href="{{ URL::to('schools/create') }}">Maak een school aan</a>


    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Acties</td>
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
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}

                                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                        <a class="btn btn-small btn-primary" href="{{ URL::to('schools/show/' . $value->id) }}">Show</a>

                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                        <a class="btn btn-small btn-primary" href="{{ URL::to('schools/edit/' . $value->id) }}">Edit</a>

                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection