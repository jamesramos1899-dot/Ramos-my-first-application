<x-layout title="Create Job">
    <h1 class="text-2xl font-bold mb-6">Create a New Job</h1>

    <form action="/jobs" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-gray-200">Job Title</label>
            <input type="text" name="title" value="{{ old('title') }}"
                   class="w-full rounded border-gray-700 bg-gray-800 text-white">
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-200">Description</label>
            <textarea name="description" class="w-full rounded border-gray-700 bg-gray-800 text-white">{{ old('description') }}</textarea>
        </div>

        <div>
            <label class="block text-gray-200">Salary</label>
            <input type="text" name="salary" value="{{ old('salary') }}"
                   class="w-full rounded border-gray-700 bg-gray-800 text-white">
            @error('salary')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-green-600 px-4 py-2 rounded text-white hover:bg-green-500">
            Save Job
        </button>
    </form>
</x-layout>
