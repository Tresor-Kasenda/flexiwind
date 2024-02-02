<?php

declare(strict_types=1);

namespace Flexiwind\View\Components\Alerts;

use Flexiwind\Concerns\HasRender;
use Illuminate\View\Component;

class Alert extends Component
{
    use HasRender;

    public string $view = 'flexiwind::components.alerts.alert';

    public function __construct(
        public string $background = '',
        public string $label = '',
        public string $message = '',
        public string $type = 'primary',
        public string $size = '',
    ) {
    }

    public function getVariantStyles(): array
    {
        $sizeStyles = $this->getSizeStyles();

        return [
            'info' => [
                'border' => "border border-gray-400 rounded-md p-2",
                'text' => 'text-gray-600'.' '.$sizeStyles,
            ],
            'success' => [
                'border' => "border border-green-400 rounded-md p-2",
                'text' => 'text-green-600'.' '.$sizeStyles,
            ],
            'warning' => [
                'border' => "border border-orange-400 rounded-md p-2",
                'text' => 'text-orange-600'.' '.$sizeStyles,
            ],
            'danger' => [
                'border' => "border border-red-400 rounded-md p-2",
                'text' => 'text-red-600'.' '.$sizeStyles,
            ],
            'primary' => [
                'border' => "border border-blue-400 rounded-md p-2",
                'text' => 'text-blue-600'.' '.$sizeStyles,
            ],
            'dark' => [
                'border' => "border border-gray-800 rounded-md p-2",
                'text' => 'text-dark'.' '.$sizeStyles,
            ]
        ][$this->type] ?? ['border' => "border border-blue-400 rounded-md p-2", 'text' => 'text-blue-600'.' '.$sizeStyles];
    }

    public function getSizeStyles(): string
    {
        $sizeStyles = [
            'xs' => 'text-xs',
            'sm' => 'text-sm',
            'md' => 'text-base',
            'lg' => 'text-lg',
            'xl' => 'text-xl',
        ];

        return $sizeStyles[$this->size] ?? 'text-base';
    }
}