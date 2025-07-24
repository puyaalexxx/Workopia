<x-layout>
    @section('title')
        Create Job
    @endsection

    @forelse($jobs as $job)
        <li><a href="{{ route('jobs.show', $job->id) }}">{{ $job->title }} - {{ $job->description }}</a></li>
    @empty
        <li>No Jobs Found</li>
    @endforelse
</x-layout>
