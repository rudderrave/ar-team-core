<?php

namespace arteam\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class LanguagePillsAsset
 * 
 * @package arteam\assets
 */
class LanguagePillsAsset extends AssetBundle
{

    public function init()
    {
        $this->sourcePath = __DIR__ . '/language';

        $this->js = [
            'js/language.js',
        ];

        $this->css = [
            'css/language.css',
        ];

        $this->depends = [
            JqueryAsset::className(),
        ];

        parent::init();
    }
}