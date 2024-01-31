<?php

declare(strict_types=1);

namespace Flexiwind\Concerns;

use Closure;

trait HasIcon
{
    public function getIcon(): Closure|string
    {
        return $this->icon ?? "";
    }
}
