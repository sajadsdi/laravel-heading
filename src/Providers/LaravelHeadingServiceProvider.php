<?php

namespace Sajadsdi\LaravelHeading\Providers;

use Illuminate\Support\ServiceProvider;
use Sajadsdi\LaravelHeading\Console\PublishCommand;
use Sajadsdi\LaravelHeading\Heading;


class LaravelHeadingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Heading::class);
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->configurePublishing();
            $this->registerCommands();
        }
    }

    private function registerCommands()
    {
        $this->commands([
            PublishCommand::class
        ]);
    }

    private function configurePublishing()
    {
        $this->publishes([__DIR__ . '/../../config/heading.php' => config_path('heading.php')], 'laravel-heading-configure');
    }
}
