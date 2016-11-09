<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'dnUNAf53s1yhVx-6QlIY18zFExia21IM',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\admin\Admin',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),

        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'engine/<id:\d+>' => 'engine/view',
                'engine/update/<id:\d+>' => 'engine/update',
                'engine/delete/<id:\d+>' => 'engine/delete',
                /*************************************************/
                'transmission/<id:\d+>' => 'transmission/view',
                'transmission/update/<id:\d+>' => 'transmission/update',
                'transmission/delete/<id:\d+>' => 'transmission/delete',
                /*************************************************/
                'model/<id:\d+>' => 'model/cars',
                'model/update/<id:\d+>' => 'model/update',
                'model/delete/<id:\d+>' => 'model/delete',
                /*************************************************/
                'image/delete/<param:\w+>' => 'image/delete',
                /*************************************************/
                'car/view/<param:\w+>' => 'car/view',
                'car/details/<param:\w+>' => 'car/details',
                'car/delete/<id:\d+>' => 'car/delete',
                'car/select-engine/<id:\d+>' => 'car/select-engine',
                'car/select-transmission/<id:\d+>' => 'car/select-transmission',
                /*************************************************/
                'body/update/<id:\d+>' => 'body/update',
                /*************************************************/
                'performance/update/<id:\d+>' => 'performance/update',
                /*************************************************/
                'fuel/update/<id:\d+>' => 'fuel/update',
                /*************************************************/
            ],
        ],
        
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
