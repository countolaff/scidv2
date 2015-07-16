<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'es', // spanish
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'utils' => [
            'class' => 'common\components\Utils',
        ], 
        'i18n' => [
            'translations' => [
                'frontend*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
                'backend*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
            ],
        ],        
    ],
];
