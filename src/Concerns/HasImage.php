<?php

declare(strict_types=1);

namespace Flexiwind\Concerns;

trait HasImage
{
    public function getImage(): string
    {
        return $this->image;
    }
}
