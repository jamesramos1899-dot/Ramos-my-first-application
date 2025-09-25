<x-layout title="Job Details">

    <h1 class="text-2xl font-bold mb-4">{{ $job->title }}</h1>
    <p class="text-gray-300">{{ $job->description }}</p>
    <p class="mt-4 text-yellow-400">Salary: {{ $job->salary }}</p>

    <div class="mt-6 flex space-x-4">
        <a href="/jobs/{{ $job->id }}/edit"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">
            Edit Job
        </a>

        <form action="/jobs/{{ $job->id }}" method="POST"
              onsubmit="return confirm('Are you sure you want to delete this job?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500">
                Delete Job
            </button>
        </form>
    </div>

</x-layout>
