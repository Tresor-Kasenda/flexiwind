<?php

declare(strict_types=1);

use Flexiwind\View\Components\Alerts\Alert;
use Illuminate\View\Component;

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
        $style = $alert->getFontSizeStyles();

        expect($style)->toContain('text');
    }
});

it('creates an alert with default values', function (): void {
    $alert = new Alert();

    expect($alert)->toBeInstanceOf(Component::class)
        ->and($alert->background)->toBe('')
        ->and($alert->icons)->toBe('')
        ->and($alert->label)->toBe('')
        ->and($alert->message)->toBe('')
        ->and($alert->type)->toBe('primary')
        ->and($alert->fontSize)->toBe('xs');
});

it('creates an alert with custom values', function (): void {
    $alert = new Alert(
        background: 'bg-red-500',
        icons: 'fa fa-info',
        label: 'Test Label',
        message: 'Test Message',
        type: 'danger',
        fontSize: 'lg'
    );

    expect($alert->background)->toBe('bg-red-500')
        ->and($alert->icons)->toBe('fa fa-info')
        ->and($alert->label)->toBe('Test Label')
        ->and($alert->message)->toBe('Test Message')
        ->and($alert->type)->toBe('danger')
        ->and($alert->fontSize)->toBe('lg');
});

it('gets variant styles for a given type', function (): void {
    $alert = new Alert(type: 'success');

    $styles = $alert->getVariantStyles();

    expect($styles['border'])->toBe('border border-green-400 rounded-md p-2')
        ->and($styles['text'])->toContain('text-green-600');
});

it('gets default variant styles for an unknown type', function (): void {
    $alert = new Alert(type: 'unknown');

    $styles = $alert->getVariantStyles();

    expect($styles['border'])->toBe('border border-blue-400 rounded-md p-2')
        ->and($styles['text'])->toContain('text-blue-600');
});
