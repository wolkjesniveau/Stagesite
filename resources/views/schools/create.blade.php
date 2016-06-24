@extends('master')

@section('content')


            <li><a href="{{ URL::to('schools') }}">View All Schools</a></li>
            <li><a href="{{ URL::to('schools/create') }}">Create a School</a>
        </ul>
    </nav>

    <h1>Create a School</h1>

    <!-- if there are creation errors, they will show here -->
    {{--{{ HTML::ul($errors->all()) }}--}}

    {{ Form::open(array('url' => 'schools')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the School!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


@endsection