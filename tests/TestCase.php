<?php

namespace Kiendaotac\LaravelDocker\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Kiendaotac\LaravelDocker\LaravelDockerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Kiendaotac\\LaravelDocker\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelDockerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-docker_table.php.stub';
        $migration->up();
        */
    }
}
