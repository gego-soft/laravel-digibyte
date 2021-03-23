<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Digibyted JSON-RPC Scheme
    |--------------------------------------------------------------------------
    | URI scheme of Digibyte Core's JSON-RPC server.
    |
    | Use https to enable SSL connections with Core,
    | but this is strongly discouraged by developers.
    |
    */

    'scheme' => env('DIGIBYTED_SCHEME', 'http'),

    /*
    |--------------------------------------------------------------------------
    | Digibyted JSON-RPC Host
    |--------------------------------------------------------------------------
    | Tells service provider which hostname or IP address
    | Digibyte Core is running at.
    |
    | If Digibyte Core is running on the same PC as
    | laravel project use localhost or 127.0.0.1.
    |
    | If you're running Digibyte Core on the different PC,
    | you may also need to add rpcallowip=<server-ip-here> to your digibyte.conf
    | file to allow connections from your laravel client.
    |
    */

    'host' => env('DIGIBYTED_HOST', 'localhost'),

    /*
    |--------------------------------------------------------------------------
    | Digibyted JSON-RPC Port
    |--------------------------------------------------------------------------
    | The port at which Digibyte Core is listening for JSON-RPC connections.
    | Default is 8332 for mainnet and 18332 for testnet.
    | You can also directly specify port by adding rpcport=<port>
    | to digibyte.conf file.
    |
    */

    'port' => env('DIGIBYTED_PORT', 9332),

    /*
    |--------------------------------------------------------------------------
    | Digibyted JSON-RPC User
    |--------------------------------------------------------------------------
    | Username needs to be set exactly as in digibyte.conf file
    | rpcuser=<username>.
    |
    */

    'user' => env('DIGIBYTED_USER', ''),

    /*
    |--------------------------------------------------------------------------
    | Digibyted JSON-RPC Password
    |--------------------------------------------------------------------------
    | Password needs to be set exactly as in digibyte.conf file
    | rpcpassword=<password>.
    |
    */

    'password' => env('DIGIBYTED_PASSWORD', ''),

    /*
    |--------------------------------------------------------------------------
    | Digibyted JSON-RPC Server CA
    |--------------------------------------------------------------------------
    | If you're using SSL (https) to connect to your Digibyte Core
    | you can specify custom ca package to verify against.
    | Note that using Digibyte JSON-RPC over SSL is strongly discouraged.
    |
    */

    'ca' => null,
];
