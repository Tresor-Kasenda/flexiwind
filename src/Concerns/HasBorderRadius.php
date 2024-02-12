<?php

declare(strict_types=1);

namespace Flexiwind\Concerns;

trait HasBorderRadius
{
    public function getBorder(): string
    {
        return [
            'sm' => 'rounded-sm',
            'md' => 'rounded-md',
            'lg' => 'rounded-lg',
            'xl' => 'rounded-lg',
            'full' => 'rounded-full',
        ][$this->radius] ?? 'rounded';
    }
}
