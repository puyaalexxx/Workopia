@extends('layout')

@section('content')
    @section('title')
        Create Job
    @endsection

    @forelse($jobs as $job)
        <li>{{ $job }}</li>
    @empty
        <li>No Jobs Found</li>
    @endforelse
@endsection
