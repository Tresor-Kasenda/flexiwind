<?php

declare(strict_types=1);

namespace Flexiwind\Concerns;

trait HasSize
{
    public function getSize(): string
    {
        return [
            'xs' => 'size-6',
            'sm' => 'size-10',
            'md' => 'size-16',
            'lg' => 'size-20',
            'xl' => 'size-24',
            'full' => 'size-full'
        ][$this->size] ?? 'size-6';
    }
}
