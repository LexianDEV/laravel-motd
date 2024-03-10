<?php

namespace Lexiandev\Motd\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lexiandev\Motd\Motd
 */
class Motd extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Lexiandev\Motd\Motd::class;
    }
}
