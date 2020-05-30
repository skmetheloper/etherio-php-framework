<?php

return [

    'name' => env('APP_NAME', 'Unnamed'),

    'debug' => (bool) env('APP_DEBUG', false),

    'env' => env('APP_ENV', 'web'),

    'timezone' => env('APP_TIMEZONE', ini_get('timezone')),

    'alias' => [
      'Arr' => Ethereal\Commons\Arr::class,
      'Request' => Ethereal\Commons\Request::class,
      'Response' => Ethereal\Commons\Response::class,
      'Route' => Ethereal\Commons\Route::class,,
      'View' => Ethereal\Commons\View::class,
      'Url' => Ethereal\Commons\Url::class,
      'Str' => Ethereal\Commons\Str::class,
    ],
];
