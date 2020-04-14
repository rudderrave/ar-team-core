<?php

use backend\assets\AppAsset;
use arteam\assets\MetisMenuAsset;
use arteam\assets\ArteamAsset;
use arteam\models\Menu;
use arteam\widgets\LanguageSelector;
use arteam\widgets\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
$assetBundle = ArteamAsset::register($this);
MetisMenuAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

        <?php
        $logo = $assetBundle->baseUrl . '/images/arteam-logo.png';
        NavBar::begin([
            'brandLabel' => Html::img($logo, ['class' => 'arteam-logo', 'alt' => 'AR-teamCMS']) . '<b>AR-team</b> ' . Yii::t('arteam', 'Control Panel'),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-static-top',
                'style' => 'margin-bottom: 0'
            ],
            'innerContainerOptions' => [
                'class' => 'container-fluid'
            ]
        ]);

        $menuItems = [
            ['label' => str_replace('http://', '', Yii::$app->urlManager->hostInfo), 'url' => Yii::$app->urlManager->hostInfo],
        ];

        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => Yii::t('arteam', 'Login'), 'url' => ['/auth/login']];
        } else {
            $menuItems[] = [
                'label' => Yii::t('arteam', 'Logout {username}', ['username' => Yii::$app->user->identity->username]),
                'url' => Yii::$app->urlManager->hostInfo . '/auth/logout',
                'linkOptions' => ['data-method' => 'post']
            ];
        }

        echo Nav::widget([
            'encodeLabels' => false,
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);

        echo LanguageSelector::widget(['display' => 'label', 'view' => 'pills']);

        NavBar::end();
        ?>

        <!-- SIDEBAR NAV -->
        <div class="navbar-default sidebar metismenu" role="navigation">
            <?= Nav::widget([
                'encodeLabels' => false,
                'dropDownCaret' => '<span class="arrow"></span>',
                'options' => [
                    ['class' => 'nav side-menu'],
                    ['class' => 'nav nav-second-level'],
                    ['class' => 'nav nav-third-level']
                ],
                'items' => Menu::getMenuItems('admin-menu'),
            ]) ?>
        </div>
        <!-- !SIDEBAR NAV -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []]) ?>

                    <?php if (Yii::$app->session->hasFlash('crudMessage')): ?>
                        <div class="alert alert-info alert-dismissible alert-crud" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?= Yii::$app->session->getFlash('crudMessage') ?>
                        </div>
                    <?php endif; ?>

                    <?= $content ?>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
