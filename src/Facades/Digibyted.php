<?php

namespace Gegosoft\Digibyte\Facades;

use Illuminate\Support\Facades\Facade;

class Digibyted extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'digibyted';
    }
}
