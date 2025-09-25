<x-layout title="Edit Job">
    <h1 class="text-2xl font-bold mb-6">Edit Job</h1>

    <form action="/jobs/{{ $job->id }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-gray-200">Job Title</label>
            <input type="text" name="title" value="{{ old('title', $job->title) }}"
                   class="w-full rounded border-gray-700 bg-gray-800 text-white">
        </div>

        <div>
            <label class="block text-gray-200">Description</label>
            <textarea name="description" class="w-full rounded border-gray-700 bg-gray-800 text-white">{{ old('description', $job->description) }}</textarea>
        </div>

        <div>
            <label class="block text-gray-200">Salary</label>
            <input type="number" name="salary" value="{{ old('salary', $job->salary) }}"
                   class="w-full rounded border-gray-700 bg-gray-800 text-white">
        </div>

        <button type="submit" class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-500">
            Update Job
        </button>
    </form>
</x-layout>
