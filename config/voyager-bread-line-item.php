<?php

return [

    /*
     * If enabled for voyager-bread-line-item package.
     */
    'enabled' => env('VOYAGER_BREAD_LINE_ITEM_ENABLED', true),

    /*
     * The config_key for voyager-bread-line-item package.
     */
    'config_key' => env('VOYAGER_BREAD_LINE_ITEM_CONFIG_KEY', 'joy-voyager-bread-line-item'),

    /*
     * The route_prefix for voyager-bread-line-item package.
     */
    'route_prefix' => env('VOYAGER_BREAD_LINE_ITEM_ROUTE_PREFIX', 'joy-voyager-bread-line-item'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadLineItem\\Http\\Controllers',
    ],
];
