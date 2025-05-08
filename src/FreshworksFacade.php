<?php

namespace Whittaker\Freshworks;

use Illuminate\Support\Facades\Facade;

class FreshworksFacade extends Facade
{
    protected static function getFacadeAccessor(): String
    {
        return 'freshworks';
    }
}