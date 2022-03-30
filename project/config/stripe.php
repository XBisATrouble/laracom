<?php
    return [
        'name' => 'alipay',
        'description' => 'Alipay - Bringing convenience into your life.',
        'key' => env('STRIPE_KEY', 'xxx'),
        'secret' => env('STRIPE_SECRET', 'xxx'),
        'redirect_url' => env('STRIPE_REDIRECT_URL', 'xxxx'),
        'cancel_url' => env('STRIPE_CANCEL_URL', 'xxxx'),
        'failed_url' => env('STRIPE_FAILED_URL', 'xxxx'),
    ];