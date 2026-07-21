<?php

$basePath = dirname(__DIR__);

return [
    'default' => env('FILESYSTEM_DISK', 'local'),
    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => $basePath . '/storage/app',
        ],
        'public' => [
            'driver' => 'local',
            'root' => $basePath . '/storage/app/public',
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
        ],
    ],
    'links' => [
        $basePath . '/public/storage' => $basePath . '/storage/app/public',
    ],
];
