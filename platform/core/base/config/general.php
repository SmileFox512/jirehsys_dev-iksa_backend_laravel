<?php

return [
    'admin_dir'                 => env('ADMIN_DIR', 'admin'),
    'default-theme'             => env('DEFAULT_THEME', 'default'),
    'base_name'                 => env('APP_NAME', 'Botble Technologies'),
    'logo'                      => '/vendor/core/images/logo_without_shadow.png',
    'favicon'                   => '/vendor/core/images/favicon.png',
    'editor'                    => [
        'ckeditor' => [
            'js' => [
                '/vendor/core/libraries/ckeditor/ckeditor.js',
            ],
        ],
        'tinymce'  => [
            'js' => [
                '/vendor/core/libraries/tinymce/tinymce.min.js',
            ],
        ],
        'primary'  => env('PRIMARY_EDITOR', 'ckeditor'),
    ],
    'error_reporting'           => [
        'to'           => null,
        'via_slack'    => env('SLACK_REPORT_ENABLED', false),
        'ignored_bots' => [
            'googlebot',        // Googlebot
            'bingbot',          // Microsoft Bingbot
            'slurp',            // Yahoo! Slurp
            'ia_archiver',      // Alexa
        ],
    ],
    'enable_https_support'      => env('ENABLE_HTTPS_SUPPORT', false),
    'date_format'               => [
        'date'      => 'd-m-Y',
        'date_time' => 'd-m-Y H:i:s',
        'js'        => [
            'date'      => 'dd-mm-yyyy',
            'date_time' => 'dd-mm-yyyy H:i:s',
        ],
    ],
    'cache_site_map'            => env('ENABLE_CACHE_SITE_MAP', false),
    'public_single_ending_url'  => env('PUBLIC_SINGLE_ENDING_URL', null),
    'send_mail_using_job_queue' => env('SEND_MAIL_USING_JOB_QUEUE', false),
    'locale'                    => env('APP_LOCALE', 'es'),
    'can_execute_command'       => env('CAN_EXECUTE_COMMAND', true),
];
