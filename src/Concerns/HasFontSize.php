<?php

declare(strict_types=1);

namespace Flexiwind\Concerns;

trait HasFontSize
{
    public function getFontSizeStyles(): string
    {
        return [
            'xs' => 'text-xs',
            'sm' => 'text-sm',
            'md' => 'text-base',
            'lg' => 'text-lg',
            'xl' => 'text-xl',
            'xxl' => 'text-2xl',
        ][$this->fontSize] ?? 'text-base';
    }
}
