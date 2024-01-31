<?php

declare(strict_types=1);

namespace Flexiwind\View\Components\Accordion;

use Flexiwind\Concerns\HasRender;
use Illuminate\View\Component;

class Accordion extends Component
{
    use HasRender;

    public string $view = "flexiwind::components.accordion.index";
}
