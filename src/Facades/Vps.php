<?php

namespace Cdvedia\Irsfa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cdvedia\Irsfa\Skeleton\SkeletonClass
 */
class Vps extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vps';
    }
}
