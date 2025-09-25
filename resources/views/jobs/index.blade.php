<x-layout title="All Jobs">

    <div class="flex justify-end mb-6">
        <a href="/jobs/create" class="rounded-md bg-green-600 px-4 py-2 text-sm font-semibold text-white hover:bg-green-500">
            + Create Job
        </a>
    </div>

    <ul class="space-y-4">
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job->id }}" class="block bg-gray-900 p-6 rounded-lg shadow hover:shadow-xl transition">
                    <h2 class="text-xl font-bold text-yellow-400">{{ $job->title }}</h2>
                    <p class="text-gray-300 mt-2">Pays {{ $job->salary }} per year</p>
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
