@extends('layouts.app')

@section('title', 'Jobs')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Jobs</h1>
        @auth
            <a href="{{ route('jobs.create') }}" class="btn btn-primary">Create New Job</a>
        @endauth
    </div>
    <ul class="list-group">
        @foreach($jobs as $job)
            <li class="list-group-item">
                <h5>{{ $job->title }}</h5>
                <p>{{ $job->description }}</p>
                <p>Salary: ${{ $job->salary }}</p>
                <p>Application Deadline: {{ $job->application_deadline }}</p>
                @auth
                    <div class="d-flex">
                        <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-warning me-2">Edit</a>
                        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                @endauth
            </li>
        @endforeach
    </ul>
@endsection
