@php
    $size = $getSize();
    $image = $getImage();
    $title = $getTitle();
    $radius = $getBorder();
@endphp

@props([
    'image' => $image,
    'radius' => $radius,
    'size' => $size,
])

<div class="relative">
    <img
        src="{{ $image }}"
        alt="{{ $title ?? str()->title($image)->slug() }}"
        {{ $attributes->merge(['class' => $size.' '.$radius.' '.'object-cover']) }}
    >
    @if($title)
        <span class="absolute bottom-0 left-3 bg-blue-600 text-white px-1 text-xs py-px rounded-full w-max">
                {{ $title }}
            </span>
    @endif
</div>


