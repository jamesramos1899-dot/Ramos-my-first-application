<x-layout :title="'All Jobs'" :heading="'All Jobs'">

    <!-- Top Bar -->
    <div class="flex justify-end mb-6">
        <a href="{{ route('jobs.create') }}"
           class="rounded-md bg-green-600 px-4 py-2 text-sm font-semibold text-white hover:bg-green-500 transition">
            + Create Job
        </a>
    </div>

    <!-- Job List -->
    @if($jobs->count())
        <ul class="space-y-4">
            @foreach($jobs as $job)
                <li>
                    <a href="{{ route('jobs.show', $job->id) }}"
                       class="block bg-gray-900 p-6 rounded-lg shadow hover:shadow-xl transition">
                        <h2 class="text-xl font-bold text-yellow-400">{{ $job->title }}</h2>
                        <p class="text-gray-300 mt-1">
                            Employer: <span class="text-blue-400">{{ $job->employer->name }}</span>
                        </p>
                        <p class="text-gray-300">Salary: {{ $job->salary }}</p>
                    </a>
                </li>
            @endforeach
        </ul>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $jobs->links() }}
        </div>
    @else
        <p class="text-gray-400">No jobs available yet.</p>
    @endif

</x-layout>
