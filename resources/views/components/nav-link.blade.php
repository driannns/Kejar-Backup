@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-[#FF6B2C]'
            : 'hover:text-[#FF6B2C]';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
