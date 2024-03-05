<?php

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(__DIR__, 2) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
    'bootstrap' => ['my'],
    'modules' => [
        'my' => [
            'class' => \common\modules\MyModule\Module::class,
        ]
    ]
];
