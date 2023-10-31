<?php

namespace Plyr\Plyr\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Plyr\Plyr\Plyr
 */
class Plyr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Plyr\Plyr\Plyr::class;
    }
}
