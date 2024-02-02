<?php

declare(strict_types=1);

namespace Flexiwind\Concerns;

trait HasIcon
{
    public function getIcon(): string
    {
        return $this->icons;
    }
}
