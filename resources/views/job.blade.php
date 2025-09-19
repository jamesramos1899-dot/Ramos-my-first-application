<x-layout :title="$title" :heading="$heading">
    <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-yellow-400">{{ $job->title }}</h2>
        <p class="mt-2 text-gray-300">This job pays {{ $job->salary }} per year.</p>
        <p class="mt-2 text-gray-400 text-sm">Employer: {{ $job->employer->name }}</p>
    </div>
</x-layout>
