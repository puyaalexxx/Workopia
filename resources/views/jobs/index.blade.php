<x-layout>

    <div class="bg-blue-900 h-24 px-4 mb-4 flex justify-center items-center rounded">
        <x-search/>
    </div>
    <!-- Back Button -->
    @if(request()->has('keywords') || request()->has('location'))
        <a
            href="{{ route('jobs.index') }}"
            class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded mb-4 inline-block"
        >
            <i class="fa fa-arrow-left mr-1"></i> Back
        </a>
    @endif

    <x-slot:pageTitle>All Jobs</x-slot:pageTitle>

    {{--<h1 class="text-2xl">{{ $title }}</h1>--}}

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse($jobs as $job)
            <x-job-card :job="$job"/>
        @empty
            <p>No jobs found</p>
        @endforelse
    </div>
    <!-- Pagination Links -->
    <div class="mt-4">{{ $jobs->links() }}</div>
</x-layout>
