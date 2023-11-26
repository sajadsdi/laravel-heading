<?php

namespace Sajadsdi\LaravelHeading\Providers;

use Illuminate\Support\ServiceProvider;
use Sajadsdi\LaravelHeading\Console\InstallCommand;
use Sajadsdi\LaravelHeading\Heading;


class LaravelHeadingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Heading::class,function (){
            return new Heading();
        });
    }

    public function boot(): void
    {
        $this->registerCommands();
    }

    private function registerCommands()
    {
        $this->commands([
            InstallCommand::class
        ]);
    }
}
