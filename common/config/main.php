<?php
return [
     'id' => 'Luxor',
    'name'=>'Inmobiliaria Luxor',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules'=>[
        'admin'=>[
              'class'=>'mdm\admin\module',
        ],
        'gridview'=>[
        'class'=> \kartik\grid\GridView::className()  
        ],
        'blog' => [
            'class' => akiraz2\blog\Module::class,
            'urlManager' => 'urlManager',// 'urlManager' by default, or maybe you can use own component urlManagerFrontend
            'imgFilePath' => '@frontend/web/img/blog/',
            'imgFileUrl' => '/img/blog/',                   
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager'=>[
            'class'=>'yii\rbac\DBManager'
           ],
        'urlManager' => [
                'enablePrettyUrl' => true,
                //'showScriptName' => false,
                'rules' => [               
                ],
            ],
        'user' => [
            'identityClass' => 'mdm\admin\models\User',
            "loginUrl" => ['admin/user/login'],
            //'enableAutoLogin' => true,
            
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
    ],
];
