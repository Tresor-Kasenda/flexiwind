<?php

declare(strict_types=1);

namespace Flexiwind;

use Flexiwind\Console\Commands\FlexiwindCommand;
use Flexiwind\View\Components\Accordion\Accordion;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FlexiwindServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->bootConsole();
            $this->commands([FlexiwindCommand::class]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'flexiwind');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'flexiwind');

        $this->registerBladeComponents();
    }

    protected function bootConsole(): void
    {
        $this->publishes([
            __DIR__.'/../config/flexiwind.php' => config_path('flexiwind.php'),
        ], 'config');
    }

    protected function registerBladeComponents(): void
    {
        $prefix = config('flexiwind.prefix');

        Blade::component($prefix.'-accordion.group', Accordion::class);
        Blade::component('flexiwind::components.accordion.item', $prefix.'-accordion.item');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/flexiwind.php', 'flexiwind');
    }
}
