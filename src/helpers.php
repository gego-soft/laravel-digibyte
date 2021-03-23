<?php

if (! function_exists('digibyted')) {
    /**
     * Get digibyted client instance.
     *
     * @return \Gegosoft\Digibyte\Client
     */
    function digibyted()
    {
        return app('digibyted');
    }
}
