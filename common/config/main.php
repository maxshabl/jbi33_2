<?php

if (gethostname() === 'jbi33.ru') {
    $db = dirname(__DIR__)."/config/db.php";
} else {
    $db = dirname(__DIR__)."/config/db.php";
}

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'db' => require($db),
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
