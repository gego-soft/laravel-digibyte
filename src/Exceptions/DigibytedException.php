<?php

namespace Gegosoft\Digibyte\Exceptions;

use RuntimeException;

class DigibytedException extends RuntimeException
{
    /**
     * Construct new digibyted exception.
     *
     * @param object $error
     *
     * @return void
     */
    public function __construct($error)
    {
        parent::__construct($error['message'], $error['code']);
    }
}
