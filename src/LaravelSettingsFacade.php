<?php

namespace Laltu\LaravelSettings;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laltu\LaravelSettings\Skeleton\SkeletonClass
 */
class LaravelSettingsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-settings';
    }
}
