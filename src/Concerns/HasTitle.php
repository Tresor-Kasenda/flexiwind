<?php

declare(strict_types=1);

namespace Flexiwind\Concerns;

trait HasTitle
{
    public function getTitle(): string
    {
        return $this->title ?? '';
    }
}
