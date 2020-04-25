<?php

namespace arteam\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class AR-teamAsset
 * 
 * @package arteam\core
 */
class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte';
    public $css = [
        'dist/css/adminlte.min.css',
    ];

    public $js = [
        'dist/js/adminlte.js',
        'plugins/bootstrap/js/bootstrap.min.js'
    ];

    public $publishOptions = [
        "only" => [
            "dist/js/*",
            "dist/css/*",
            "plugins/bootstrap/js/*",
        ],
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'arteam\assets\FontAwesomeAsset'
    ];
}