<x-layout :title="$title" :heading="$heading">
    <ul class="space-y-4">
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" 
                   class="block bg-gray-900 p-6 rounded-lg shadow hover:shadow-xl transition">
                    <h2 class="text-xl font-bold text-yellow-400">{{ $job['title'] }}</h2>
                    <p class="text-gray-300">Pays {{ $job['salary'] }} per year</p>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
