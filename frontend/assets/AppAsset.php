<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
     public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/mdb.min.css',
        'css/stlye.css',
        
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/mdb.min.js',
        'js/jquery-2.2.3.min.js',
        'js/tether.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
