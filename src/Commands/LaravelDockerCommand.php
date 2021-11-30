<?php

namespace Kiendaotac\LaravelDocker\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class LaravelDockerCommand extends Command
{
    public $signature = 'laravel-docker:install';

    public $description = 'Create docker config for Laravel Application';

    public function handle(): int
    {
        File::copyDirectory(__DIR__ . "/../../stub", base_path());
        $this->comment('All done');

        return self::SUCCESS;
    }
}
