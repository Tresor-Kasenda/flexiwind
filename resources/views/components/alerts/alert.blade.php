@php
    $variantStyles = $getVariantStyles();
@endphp

@props([
    'background' => '',
    'message' => '',
    'label' => '',
])

<div data-alert {{ $attributes->merge(['class' => $variantStyles['border'] . ' ' . $background]) }}>
    @if($label)
        <h3 {{ $attributes->merge(['class' => 'font-medium ' . $variantStyles['text']]) }}>
            {{ $label }}
        </h3>
    @endif
    <p {{ $attributes->merge(['class' => $variantStyles['text']]) }}>
        {{ $message ?? $slot }}
    </p>
</div>
