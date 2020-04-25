<?php
/**
 * AR-team
 * https://ar-team.sytes.net/
 *
 * User: Ruslan Oliniychuk
 * Mail: rudder.rave@gmail.com
 * Date: 4/25/20
 */

namespace arteam\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class AR-teamAsset
 *
 * @package arteam\core
 */
class ArteamAsset extends AssetBundle
{

    public function init()
    {
        $this->sourcePath = __DIR__ . '/admin';

        $this->js = [
//            'js/admin.js',
        ];

        $this->css = [
            'css/site.css',
            'css/widget.css',
        ];

        $this->depends = [
            JqueryAsset::className(),
            'yii\web\YiiAsset',
            'arteam\assets\AdminLteAsset',
        ];

        parent::init();
    }
}