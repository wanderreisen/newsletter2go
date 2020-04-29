<?php

namespace Wanderreisen\Newsletter2Go\Facades;

use Illuminate\Support\Facades\Facade;

class Newsletter2Go extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'newsletter2go';
    }
}
