<?php

// composer autoload
require(__DIR__ . '/../vendor/autoload.php');

// read local config if exists
$local = is_file(__DIR__ . '/config/local.php') ? require(__DIR__ . '/../config/local.php') : [];

// run init function from local config if key "init" exists.
if (isset($local['init']) && is_callable($local['init'])) {
    call_user_func($local['init'], 'web');
}

// yii2 base lib
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

// run application using merged config (common, local[common], console, local[console])
(new yii\web\Application(
    \yii\helpers\ArrayHelper::merge(
        require(__DIR__ . '/../config/common.php'),
        \yii\helpers\ArrayHelper::getValue($local, 'common', []),
        require(__DIR__ . '/../config/web.php'),
        \yii\helpers\ArrayHelper::getValue($local, 'web', [])
    )
))->run();
