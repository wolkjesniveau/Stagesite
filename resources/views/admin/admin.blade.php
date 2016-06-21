@extends('admin.master')

@section('content')
    <div class="col-md-12">
        <h1 class="text-align-center pagetitle"> Admin onderdelen</h1>

    <a class="btn btn-primary" href="{{ route('tool.index') }}">Tools admin</a>

    @if (@Auth::user()->role_id > 3)
            <a class="btn btn-primary" href="{{ route('internshipAdmin') }}">Stages Admin</a>
            <a class="btn btn-primary" href="{{ route('companies.index') }}">Bedrijven Admin</a>
            <a class="btn btn-primary" href="{{ route('schoolsAdmin') }}">Scholen Admin</a>
            <a class="btn btn-primary" href="{{ route('study.index') }}">Opleidingen Admin</a>
    @endif
    </div>
@endsection

