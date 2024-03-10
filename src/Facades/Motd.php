<?php

namespace lexian-droid\Motd\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \lexian-droid\Motd\Motd
 */
class Motd extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \lexian-droid\Motd\Motd::class;
    }
}
