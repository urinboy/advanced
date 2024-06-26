<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    'sourceLanguage' => 'uz',
                    'fileMap' => [
                        'app' => 'app.php',
//                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
];
