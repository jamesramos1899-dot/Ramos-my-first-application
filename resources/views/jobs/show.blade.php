<x-layout :title="$job->title" :heading="'Job Details'">

    <h1 class="text-3xl font-bold text-yellow-400 mb-4">{{ $job->title }}</h1>
    <p class="text-gray-300 mb-2">
        Employer: <span class="text-blue-400">{{ $job->employer->name }}</span>
    </p>
    <p class="text-gray-300 mb-6">Salary: {{ $job->salary }}</p>

    <div class="flex space-x-4">
        <a href="{{ route('jobs.edit', $job->id) }}"
           class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-500 transition">
            Edit Job
        </a>

        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST"
              onsubmit="return confirm('Are you sure you want to delete this job?');">
            @csrf
            @method('DELETE')
            <button type="submit"
                    class="bg-red-600 px-4 py-2 rounded text-white hover:bg-red-500 transition">
                Delete Job
            </button>
        </form>
    </div>

</x-layout>
