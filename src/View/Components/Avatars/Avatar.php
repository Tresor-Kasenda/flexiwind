<?php

declare(strict_types=1);

namespace Flexiwind\View\Components\Avatars;

use Flexiwind\Concerns\HasBorderRadius;
use Flexiwind\Concerns\HasExtractMethod;
use Flexiwind\Concerns\HasImage;
use Flexiwind\Concerns\HasRender;
use Flexiwind\Concerns\HasSize;
use Flexiwind\Concerns\HasTitle;
use Illuminate\View\Component;

class Avatar extends Component
{
    use HasBorderRadius;
    use HasExtractMethod;
    use HasImage;
    use HasRender;
    use HasSize;
    use HasTitle;

    public string $view = "flexiwind::components.avatars.avatar";

    public function __construct(
        public ?string $image = null,
        public ?string $title = null,
        public ?string $size = null,
        public ?string $radius = null,
        public ?string $intend = null
    ) {
    }
}
