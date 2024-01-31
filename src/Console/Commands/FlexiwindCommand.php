<?php

declare(strict_types=1);

namespace Flexiwind\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class FlexiwindCommand extends Command
{
    protected $signature = 'flexiwind:install';

    protected $description = 'Install the Flexiwind UI preset into the application with Tailwind, Livewire and Alpine.';

    public function handle(): void
    {
        $this->info("\n👋  Welcome to Flexiwind!");

        //Yarn or Npm ?

        // Install Livewire/Volt

        // Setup Tailwind and Daisy

        // Copy stubs if is brand-new project

        // Rename components if Jetstream or Breeze are detected

        // Clear view cache
        Artisan::call('view:clear');

        $this->info("\n✅   Done! Run `yarn dev or npm run dev`");
        $this->info('🌟  Give it a star: ');
        $this->info('❤️  Sponsor this project: ');
    }
}
