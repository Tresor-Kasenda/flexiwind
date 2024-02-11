<?php

namespace Flexiwind\Concerns;

trait HasImage
{
    public function getImage(): string
    {
        return $this->image;
    }
}
