<?php

namespace Cdvedia\Irsfa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cdvedia\Irsfa\Skeleton\SkeletonClass
 */
class Hosting extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hosting';
    }
}
