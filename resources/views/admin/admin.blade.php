@extends('admin.master')

@section('content')
    <div class="col-md-12">
        <h1 class="text-align-center pagetitle"> Admin onderdelen</h1>

    @if (@Auth::user()->role_id > 3)
            <a class="btn btn-primary" href="{{ URL::to('tool') }}">Tools admin</a>
            <a class="btn btn-primary" href="{{ URL::to('internships') }}">Stages Admin</a>
            <a class="btn btn-primary" href="{{ URL::to('companies') }}">Bedrijven Admin</a>

            <a class="btn btn-primary" href="{{ URL::to('schools') }}">Scholen Admin</a>
            <a class="btn btn-primary" href="{{ URL::to('study') }}">Opleidingen Admin</a>

        @if (@Auth::user()->role_id > 4)
                <a class="btn btn-primary" href="{{ URL::to('user') }}">Users Admin</a>
            @endif
        @endif

    </div>
@endsection

