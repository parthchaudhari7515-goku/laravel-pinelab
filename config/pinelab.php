<?php
return [
    'base_url' => env('PINELAB_BASE_URL', 'https://api.pinelab.example'),
    'api_key' => env('PINELAB_API_KEY', ''),
    'api_secret' => env('PINELAB_API_SECRET', ''),
    'timeout' => env('PINELAB_TIMEOUT', 15),
    'log' => env('PINELAB_LOG', false),
];
