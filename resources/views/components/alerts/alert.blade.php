@php
    $variantStyles = $getVariantStyles();
    $icons = $getIcon();
@endphp

@props([
    'background' => '',
    'message' => '',
    'label' => '',
])

<div data-alert {{ $attributes->merge(['class' => $variantStyles['border'] . ' ' . $background]) }}>
    @if($icons)
        <div class="w-max p-2 rounded-full {{ $variantStyles['border'] }}">
            {{ $icons }}
        </div>
    @endif
    <div class="flex-1">
        @if($label)
            <h3 {{ $attributes->merge(['class' => 'font-medium ' . $variantStyles['text']]) }}>
                {{ $label }}
            </h3>
        @endif
        <p {{ $attributes->merge(['class' => $variantStyles['text']]) }}>
            {{ $message ?? $slot }}
        </p>
    </div>
</div>
