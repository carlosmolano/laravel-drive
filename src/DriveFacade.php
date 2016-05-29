<?php

namespace OWOW\LaravelDrive\Facades;

use Illuminate\Support\Facades\Facade;

class DriveAPI extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'driveapi'; // Keep this in mind
    }
}