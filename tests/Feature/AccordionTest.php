<?php

declare(strict_types=1);

use Flexiwind\View\Components\Accordion\Accordion;

it('accordion can be instantiated with no arguments', function (): void {
    $accordion = new Accordion();

    expect($accordion)->toBeInstanceOf(Accordion::class);
});

it('has render trait', function (): void {
    expect(class_uses(Accordion::class))->toContain('Flexiwind\Concerns\HasRender');
});

it('is render a correct view', function (): void {
    $accordion = new Accordion();
    expect("flexiwind::components.accordion.index")->toEqual($accordion->view);
});
