<?php

declare(strict_types=1);

namespace Flexiwind\Concerns;

use Closure;
use ReflectionClass;
use ReflectionMethod;

trait HasExtractMethod
{
    /**
     * @return array<string, Closure>
     */
    public function extractPublicMethods(): array
    {
        $methods = new ReflectionClass($this);
        $publicMethods = [];

        foreach ($methods->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
            $methodName = $method->getName();
            if (method_exists($this, $methodName)) {
                $publicMethods[$methodName] = $this->$methodName(...);
            }
        }

        return $publicMethods;
    }
}
