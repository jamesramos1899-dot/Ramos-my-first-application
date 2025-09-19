@props(['active' => false])

<a {{ $attributes->merge([
    'class' => $active
        ? 'text-yellow-400 font-bold border-b-2 border-yellow-400 px-3 py-2'
        : 'text-gray-300 hover:text-yellow-300 transition px-3 py-2'
]) }}>
    {{ $slot }}
</a>
