<?php

namespace Sajadsdi\LaravelHeading\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class InstallCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'heading:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Laravel Heading!';

    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function handle()
    {
        $this->info('Installing Laravel Heading ...');
        $this->installProvider();
        $this->info('Installation completed !');
        return null;
    }

    private function installProvider()
    {
        $this->comment('Adding Provider in app config ...');
        $appConfig = file_get_contents(config_path('app.php'));

        if (Str::contains($appConfig, 'Sajadsdi\\LaravelHeading\\Providers\\LaravelHeadingServiceProvider::class')) {
            $this->warn('Sajadsdi\\LaravelHeading\\Providers\\LaravelHeadingServiceProvider::class provider is exists in app config ............ SKIPPED');
            return;
        }

        file_put_contents(config_path('app.php'), str_replace(
            "* Package Service Providers...\n         */",
            "* Package Service Providers...\n         */\n" . "        Sajadsdi\\LaravelHeading\\Providers\\LaravelHeadingServiceProvider::class,",
            $appConfig
        ));
        $this->info('Sajadsdi\\LaravelHeading\\Providers\\LaravelHeadingServiceProvider::class provider added to app config ..... DONE');
    }
}
