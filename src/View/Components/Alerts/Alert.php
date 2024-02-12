<?php

declare(strict_types=1);

namespace Flexiwind\View\Components\Alerts;

use Flexiwind\Concerns\HasFontSize;
use Flexiwind\Concerns\HasIcon;
use Flexiwind\Concerns\HasRender;
use Illuminate\View\Component;

class Alert extends Component
{
    use HasFontSize;
    use HasIcon;
    use HasRender;

    public string $view = 'flexiwind::components.alerts.alert';

    public function __construct(
        public ?string $background = null,
        public ?string $icons = null,
        public ?string $label = null,
        public ?string $message = null,
        public ?string $type = null,
        public ?string $fontSize = null,
    ) {
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function getVariantStyles(): array
    {
        $sizeStyles = $this->getFontSizeStyles();
        $styles = [
            'info' => 'gray-400 text-gray-600',
            'success' => 'green-400 text-green-600',
            'warning' => 'orange-400 text-orange-600',
            'danger' => 'red-400 text-red-600',
            'primary' => 'blue-400 text-blue-600',
            'dark' => 'gray-800 text-dark',
        ];

        $type = $styles[$this->type] ?? 'blue-400 text-blue-600';
        return [
            'border' => ["border border-{$type} rounded-md p-2"],
            'text' => ["text-{$type} {$sizeStyles}"],
        ];
    }
}
