<?php

return [
    'settings' => [
        // Twig views
        'view' => [
            'template_path' => __DIR__ . '/../templates',
            'twig'          => [
                'cache'       => __DIR__ . '/../var/cache/twig',
                'debug'       => true,
                'auto_reload' => true,
            ],
        ],

        // HelpScout
        'helpscout_app_secret' => 'secret',
    ],
];
