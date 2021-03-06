<?php

namespace Kiendaotac\LaravelDocker;

use Kiendaotac\LaravelDocker\Commands\LaravelDockerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDockerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-docker')
//            ->hasConfigFile()
//            ->hasViews()
//            ->hasMigration('create_laravel-docker_table')
            ->hasCommand(LaravelDockerCommand::class);
    }
}
