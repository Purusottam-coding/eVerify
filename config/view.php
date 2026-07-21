<?php

$basePath = dirname(__DIR__);

return [
    'paths' => [$basePath . '/resources/views'],
    'compiled' => env('VIEW_COMPILED_PATH', $basePath . '/storage/framework/views'),
];
