<x-layout :title="$title" :heading="$heading">
    <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-yellow-400">{{ $job->title }}</h2>
        <p class="mt-2 text-gray-300">This job pays {{ $job->salary }} per year.</p>
        <p class="mt-2 text-gray-400 text-sm">Employer: {{ $job->employer->name }}</p>

        <div class="mt-4">
            <h3 class="font-semibold text-gray-200">Tags:</h3>
            @foreach($job->tags as $tag)
                <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                    {{ $tag->name }}
                </span>
            @endforeach
        </div>
    </div>
</x-layout>
