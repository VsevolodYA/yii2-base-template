<?php

return [
    'init' => function () {
        defined('YII_DEBUG') or define('YII_DEBUG', true);
        defined('YII_ENV') or define('YII_ENV', 'dev');
    },
    'common' => [
        'components' => [
            'db' => [
                'dsn' => 'mysql:host=localhost;dbname=yii2',
                'username' => 'root',
                'password' => ''
            ]
        ],
    ],
    'web' => [],
    'cosole' => []
];
