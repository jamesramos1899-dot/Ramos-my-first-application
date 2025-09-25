<x-layout :title="$title" :heading="$heading">
    <ul class="space-y-4">
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job->id }}" class="block bg-gray-900 p-6 rounded-lg shadow hover:shadow-xl transition">
                    <div class="font-bold text-blue-400 text-sm">{{ $job->employer->name }}</div>
                    <h2 class="text-xl font-bold text-yellow-400">{{ $job->title }}</h2>
                    <p class="text-gray-300">Pays {{ $job->salary }} per year</p>
                    <div class="mt-2">
                        @foreach($job->tags as $tag)
                            <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                    </div>
                </a>
            </li>
        @endforeach
    </ul>

    <!-- ✅ Pagination Links -->
    <div class="mt-6">
        {{ $jobs->links() }}
    </div>
</x-layout>
