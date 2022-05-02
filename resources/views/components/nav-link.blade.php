@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-white inline-flex items-center px-1 pt-1 border-b-2 border-yellow-400 text-sm font-medium leading-5 focus:outline-none focus:border-yellow-700 transition duration-150 ease-in-out'
            : 'text-white inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-yellow-700 hover:border-yellow-300 focus:outline-none focus:text-yellow-700 focus:border-yellow-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
