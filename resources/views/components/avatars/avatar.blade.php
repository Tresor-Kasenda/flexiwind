@php
    $size = $getSize();
    $image = $getImage();
    $title = $getTitle();
    $radius = $getBorder();
@endphp
@dump($size)
@props([
    'image' => $image,
    'radius' => $radius,
    'size' => $size,
])
@if($title)
    <div class="relative">
        <img
            src="{{ $image }}"
            alt="{{ $title }}"
            {{ $attributes->merge(['class' => 'object-cover'. ' ' . $size . ' ' . $radius]) }}
        >
        @if($title)
            <span class="absolute bottom-0 left-3 bg-blue-600 text-white px-1 text-xs py-px rounded-full w-max">
                {{ $title }}
            </span>
        @endif
    </div>
@endif

