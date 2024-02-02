<?php

namespace Flexiwind\Concerns;

trait HasFontSize
{
    public function getFontSizeStyles(): string
    {
        $sizeStyles = [
            'xs' => 'text-xs',
            'sm' => 'text-sm',
            'md' => 'text-base',
            'lg' => 'text-lg',
            'xl' => 'text-xl',
            'xxl' => 'text-2xl',
        ];

        return $sizeStyles[$this->fontSize] ?? 'text-base';
    }
}
