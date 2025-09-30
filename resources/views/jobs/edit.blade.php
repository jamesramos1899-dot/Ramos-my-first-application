<x-layout>
    <x-slot:heading>Edit Job</x-slot:heading>

    {{-- Update Form --}}
    <form action="{{ route('jobs.update', $job->id) }}" method="POST" class="mb-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-black">Title</label>
            <input type="text" name="title"
                   value="{{ old('title', $job->title) }}" 
                   class="border rounded px-3 py-2 w-full text-black">
                   @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-black">Salary</label>
            <input type="text" name="salary"
                   value="{{ old('salary', $job->salary) }}" 
                   class="border rounded px-3 py-2 w-full text-black">
                   @error('salary')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-black">Employer</label>
            <select name="employer_id" 
                    class="border rounded px-3 py-2 w-full text-black">
                @foreach($employers as $employer)
                    <option value="{{ $employer->id }}"
                            {{ $job->employer_id == $employer->id ? 'selected' : '' }}>
                        {{ $employer->name }}
                    </option>
                @endforeach
                
            </select>
            @error('employer_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">
            Update Job
        </button>
    </form>

    {{-- Delete Form --}}
    <form action="{{ route('jobs.destroy', $job->id) }}" method="POST"
          onsubmit="return confirm('Are you sure you want to delete this job?')">
        @csrf
        @method('DELETE')

        <button type="submit"
                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500">
            Delete Job
        </button>
    </form>
</x-layout>
