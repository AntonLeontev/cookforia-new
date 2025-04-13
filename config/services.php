<?php

return [
    'ya_captcha' => [
        'server_key' => env('YANDEX_CAPTCHA_SERVER_KEY'),
        'client_key' => env('YANDEX_CAPTCHA_CLIENT_KEY'),
    ],

    'bitrix' => [
        'webhook' => env('BITRIX_WEBHOOK'),
    ],
];
