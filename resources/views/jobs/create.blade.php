<x-layout :title="'Create Job'" :heading="'Create a New Job'">

    <form action="{{ route('jobs.store') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Job Title -->
        <div>
            <label class="block text-gray-200 mb-1">Job Title</label>
            <input type="text" name="title" value="{{ old('title') }}"
                   class="w-full rounded border-gray-700 bg-gray-800 text-white px-3 py-2 focus:outline-none">
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Salary -->
        <div>
            <label class="block text-gray-200 mb-1">Salary</label>
            <input type="text" name="salary" value="{{ old('salary') }}"
                   class="w-full rounded border-gray-700 bg-gray-800 text-white px-3 py-2 focus:outline-none">
            @error('salary')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Employer Dropdown -->
        <div>
            <label class="block text-gray-200 mb-1">Employer</label>
            <select name="employer_id"
                    class="w-full rounded border-gray-700 bg-gray-800 text-white px-3 py-2 focus:outline-none">
                <option value="">-- Select Employer --</option>
                @foreach($employers as $employer)
                    <option value="{{ $employer->id }}" {{ old('employer_id') == $employer->id ? 'selected' : '' }}>
                        {{ $employer->name }}
                    </option>
                @endforeach
            </select>
            @error('employer_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit -->
        <button type="submit"
                class="bg-green-600 px-4 py-2 rounded text-white hover:bg-green-500 transition">
            Save Job
        </button>
    </form>

</x-layout>
