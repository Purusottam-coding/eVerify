<?php

$basePath = dirname(__DIR__);

return [
    'default' => env('CACHE_STORE', 'file'),
    'stores' => [
        'array' => [
            'driver' => 'array',
        ],
        'file' => [
            'driver' => 'file',
            'path' => $basePath . '/storage/framework/cache/data',
        ],
    ],
    'prefix' => env('CACHE_PREFIX', 'laravel_cache'),
];
