<?php

namespace Sajadsdi\LaravelHeading\Providers;

use Illuminate\Support\ServiceProvider;
use Sajadsdi\LaravelHeading\Console\InstallCommand;
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
            PublishCommand::class,
            InstallCommand::class
        ]);
    }

    private function configurePublishing()
    {
        $this->publishes([__DIR__ . '/../../config/laravel-heading.php' => config_path('laravel-heading.php')], 'laravel-heading-configure');
    }
}
