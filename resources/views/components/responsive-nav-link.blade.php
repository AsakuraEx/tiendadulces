@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-emerald-200 text-center text-base font-medium text-white bg-emerald-600 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-emerald-500 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-transparent text-center text-base font-medium text-white hover:text-white hover:bg-emerald-400 transition duration-150 ease-in-out rounded-md shadow-sm';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
