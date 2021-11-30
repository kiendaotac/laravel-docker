<?php

namespace Kiendaotac\LaravelDocker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kiendaotac\LaravelDocker\LaravelDocker
 */
class LaravelDocker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-docker';
    }
}
