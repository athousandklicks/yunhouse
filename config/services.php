<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],


    'facebook' => [ //change it to any provider
        'client_id' => '1551937854880784',
        'client_secret' => '834580131ee91dd71d14feddb5701613',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    'twitter' => [ //change it to any provider
        'client_id' => 'Z4DC16pA473fRtBbDpTx2AJnp',
        'client_secret' => 'dHHSVdzJPhIYqljcq5pw44D60fgot4pd7eoSZHZVVeb4D6DlkS',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],
    'google' => [ //change it to any provider
        'client_id' => '4389117174-13viiku46i9vdjucvl6jkeo8k953c1bt.apps.googleusercontent.com',
        'client_secret' => 'BcHfkAdwAugcrxB5rlLR76',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],


];
