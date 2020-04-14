<?php
use arteam\AR-team;

/* @var $this yii\web\View */
?>

<div class="pull-<?= $position ?> col-lg-<?= $width ?> widget-height-<?= $height ?>">
    <div class="panel panel-default">
        <div class="panel-heading"><?= Yii::t('arteam', 'System Info') ?></div>
        <div class="panel-body">
            <b><?= Yii::t('arteam', 'AR-team CMS Version') ?>:</b> <?= Yii::$app->params['version']; ?><br/>
            <b><?= Yii::t('arteam', 'AR-team Core Version') ?>:</b> <?= AR-team::getVersion(); ?><br/>
            <b><?= Yii::t('arteam', 'Yii Framework Version') ?>:</b> <?= Yii::getVersion(); ?><br/>
            <b><?= Yii::t('arteam', 'PHP Version') ?>:</b> <?= phpversion(); ?><br/>
        </div>
    </div>
</div>