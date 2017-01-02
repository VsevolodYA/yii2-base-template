<?php

use yii\db\Expression;
use app\models\User;

$now = new Expression('NOW()');

return [
    [
        'id' => 1,
        'auth_key' => Yii::$app->security->generateRandomString(),
        'email' => 'admin@site.com',
        'password_hash' => Yii::$app->security->generatePasswordHash('admin'),
        'status' => User::STATUS_ENABLED,
        'created_at' => $now,
        'updated_at' => $now
    ],
    [
        'id' => 2,
        'auth_key' => Yii::$app->security->generateRandomString(),
        'email' => 'user@site.com',
        'password_hash' => Yii::$app->security->generatePasswordHash('user'),
        'status' => User::STATUS_ENABLED,
        'created_at' => $now,
        'updated_at' => $now
    ]
];