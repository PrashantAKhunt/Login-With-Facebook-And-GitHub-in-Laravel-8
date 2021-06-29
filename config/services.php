<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => env('FB_CL_ID'),
        'client_secret' => env('FB_CL_SE'),
        'redirect' => 'https://prashant.khunt/prashant_khunt/Laravel_Project/loginWithFB/public/auth/fb/rd/',
    ],

    'github' => [
        'client_id' => env('GIT_CL_ID'),
        'client_secret' => env('GIT_CL_SE'),
        'redirect' => 'https://prashant.khunt/prashant_khunt/Laravel_Project/loginWithFB/public/auth/git/rd/',
    ],

];
