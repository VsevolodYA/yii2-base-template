<?php

Yii::setAlias('root', dirname(__DIR__));

return [
    'basePath' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app',
    'runtimePath' => '@root/runtime',
    'bootstrap' => [
        'log'
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
            'viewPath' => '@root/resources/views',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'forceTranslation' => true,
                    'basePath' => '@root/resources/messages',
                ],
            ],
        ],
        'assetManager' => [
            'forceCopy' => YII_DEBUG,
            'bundles' => [
                'app' => [
                    'class' => 'yii\web\AssetBundle',
                    'sourcePath' => '@root/resources/packages/app',
                    'css' => [
                        'css/main.css',
                    ],
                    'js' => [
                        'js/main.js',
                    ],
                    'depends' => [
                        'yii\web\YiiAsset',
                        'yii\bootstrap\BootstrapAsset',
                    ]
                ]
            ]
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2basic',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'enableSchemaCache' => !YII_DEBUG
        ]
    ],
    'params' => []
];