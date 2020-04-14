<?php

namespace arteam\behaviors;

use Yii;

class MultilingualBehavior extends \omgdef\multilingual\MultilingualBehavior
{

    /**
     * @inheritdoc
     */
    public $requireTranslations = true;

    /**
     * @inheritdoc
     */
    public $abridge = false;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->languages = Yii::$app->arteam->languages;
        $this->defaultLanguage = Yii::$app->language;
    }

}