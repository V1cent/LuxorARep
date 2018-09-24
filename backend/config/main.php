<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'name'=>'Administrador luxor',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        
        'blog' => [
         'class' => 'akiraz2\blog\Module',
         'controllerNamespace' => 'akiraz2\blog\controllers\backend',
         'redactorModule' => 'redactor' // 'redactorBlog' - default, maybe you want use standard module 'redactor' with own config
        ],
        'redactor' => [
         'class' => 'yii\redactor\RedactorModule',
         'uploadDir' => '@frontend/web/img/upload/',
         'uploadUrl' => $params['frontendHost'] . '/img/upload', //$params['frontendHost'] . '@frontend/web/img/upload',
         'imageAllowExtensions' => ['jpg', 'png', 'gif', 'svg']
     ],
        
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/backend/index' => '@app/views/layouts/main',
                  //'@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app',
                  //'@app/views/blog-category' => '@akiraz2/yii2-blog/views/backend/blog-category' ,
                ],
            ],
        ],
        'user' => [
            'identityCookie' => [
                'name'     => '_backendIdentity',
                'path'     => '/',
                'httpOnly' => true,
            ],
            //'identityClass' => 'mdm\admin\models\User',
            //"loginUrl" => ['admin/user/login'],
            //'enableAutoLogin' => true,
            
        ],
         'session' => [
            'name' => 'BACKENDSESSID',
            'cookieParams' => [
                'httpOnly' => true,
                'path'     => '/',
            ],
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        /*'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],*/
        
    ],
    'params' => $params,
];
