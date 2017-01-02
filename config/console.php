<?php

return [
    'id' => 'console',
    'controllerNamespace' => 'app\commands',
    'controllerMap' => [
        'fixture' => [
            'class' => 'yii\console\controllers\FixtureController',
            'globalFixtures' => [],
            'namespace' => 'root\db\fixtures',
        ],
        'migrate' => [
            'class' => 'yii\console\controllers\MigrateController',
            'migrationPath' => '@root/db/migrations',
            'templateFile' => '@root/resources/views/migration.php'
        ],
        'serve' => [
            'class' => 'yii\console\controllers\ServeController',
            'docroot' => '@root/web',
        ]
    ],
    'components' => [],
    'params' => []
];