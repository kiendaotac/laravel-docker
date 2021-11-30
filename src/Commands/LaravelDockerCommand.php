<?php

namespace Kiendaotac\LaravelDocker\Commands;

use Illuminate\Console\Command;

class LaravelDockerCommand extends Command
{
    public string $signature = 'laravel-docker';

    public string $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
