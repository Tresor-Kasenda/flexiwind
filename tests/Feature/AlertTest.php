<?php

declare(strict_types=1);

use Flexiwind\View\Components\Alerts\Alert;

it('returns correct variant styles for each type', function (): void {
    $types = ['info', 'success', 'warning', 'danger', 'primary', 'dark'];
    foreach ($types as $type) {
        $alert = new Alert('bg-red-200', 'Alert Label', 'Alert Message', $type, 'xl');
        $styles = $alert->getVariantStyles();

        expect($styles)->toHaveKey('border')
            ->and($styles)->toHaveKey('text')
            ->and($styles['border'])->toContain('border')
            ->and($styles['text'])->toContain('text');
    }
});

it('returns default variant styles for invalid type', function (): void {
    $alert = new Alert('bg-red-200', 'Alert Label', 'Alert Message', 'invalid', 'xl');
    $styles = $alert->getVariantStyles();

    expect($styles)->toHaveKey('border')
        ->and($styles)->toHaveKey('text')
        ->and($styles['border'])->toContain('border')
        ->and($styles['text'])->toContain('text');
});

it('returns correct size styles for each size', function (): void {
    $sizes = ['xs', 'sm', 'md', 'lg', 'xl'];
    foreach ($sizes as $size) {
        $alert = new Alert('bg-red-200', 'Alert Label', 'Alert Message', 'danger', $size);
        $style = $alert->getSizeStyles();

        expect($style)->toContain('text');
    }
});

it('returns default size styles for invalid size', function (): void {
    $alert = new Alert('bg-red-200', 'Alert Label', 'Alert Message', 'danger', 'invalid');
    $style = $alert->getSizeStyles();

    expect($style)->toEqual('text-base');
});
