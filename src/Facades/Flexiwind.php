<?php

declare(strict_types=1);

namespace Flexiwind\Facades;

use Illuminate\Support\Facades\Facade;

class Flexiwind extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Flexiwind\Flexiwind::class;
    }
}
