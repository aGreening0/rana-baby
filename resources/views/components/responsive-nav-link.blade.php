@props(['active'])

@php
$classes = ($active ?? false)
            ? 'btn btn-outline btn-primary'
            : 'btn btn-outline btn-primary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
