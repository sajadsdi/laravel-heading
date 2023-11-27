<?php

namespace Sajadsdi\LaravelHeading\Console;

use Illuminate\Console\Command;

class PublishCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'heading:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish Laravel Heading configure!';

    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function handle()
    {
        $this->info('Publishing Laravel Heading ...');
        $this->publish();
        return null;
    }

    private function publish()
    {
        $this->comment('Publishing configure ...');
        $this->call('vendor:publish', ['--tag' => "laravel-heading-configure"]);
    }
}
