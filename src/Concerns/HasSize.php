<?php

declare(strict_types=1);

namespace Flexiwind\Concerns;

trait HasSize
{
    public function getSize(): string
    {
        return [
            'sm' => 'w-8 h-8',
            'md' => 'w-10 h-10',
            'lg' => 'w-12 h-12',
            'xl' => 'w-14 h-14',
            'full' => 'w-full h-full',
        ][$this->size] ?? 'w-8 h-8';
    }
}
