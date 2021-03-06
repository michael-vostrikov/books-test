<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['user'],
        ],
        'session' => [
            'class' => 'yii\web\DbSession',
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => false,
            'enableRegistration' => true,
            'enableConfirmation' => true,
            'enableFlashMessages' => false,
            'confirmWithin' => 6 * 3600,
            'admins' => ['admin'],

            // http://site.local/user/admin
            // all users from 'admins' section have access here
        ],
    ],
];
