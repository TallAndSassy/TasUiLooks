<?php

namespace TallAndSassy\TasUiLooks\Facades;

use Illuminate\Support\Facades\Facade;

class TasUiLooks extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tasuilooks';
    }
}
