<x-layout :title="$title" :heading="$heading">
    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-gray-900 p-6 rounded-lg shadow-md hover:shadow-xl transition">
            <h2 class="text-xl font-bold mb-2">🚀 Find Your Dream Job</h2>
            <p class="text-gray-300">Explore thousands of opportunities in technology, design, and more.</p>
            <a href="/jobs" class="mt-3 inline-block text-blue-400 hover:underline">Browse Jobs →</a>
        </div>
        <div class="bg-gray-900 p-6 rounded-lg shadow-md hover:shadow-xl transition">
            <h2 class="text-xl font-bold mb-2">🤝 For Employers</h2>
            <p class="text-gray-300">Post your job and connect with top professionals across the world.</p>
        </div>
    </div>
</x-layout>
