<?php

declare(strict_types=1);

namespace Flexiwind\Concerns;

use Closure;
use ReflectionClass;
use ReflectionMethod;

trait HasExtractMethod
{
    public function extractPublicMethods(): array
    {
        $methods = new ReflectionClass($this);
        $publicMethods  = [];

        foreach ($methods->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
            $publicMethods[$method->getName()] = Closure::fromCallable([$this, $method->getName()]);
        }

        return $publicMethods;
    }
}
