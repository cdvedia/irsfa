<?php

namespace Cdvedia\Irsfa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cdvedia\Irsfa\Skeleton\SkeletonClass
 */
class Irsfa extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'irsfa';
    }
}
