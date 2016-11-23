<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?='Audi';?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!--Logo Company-->

    <div class="logo_container">
        <div class="audi_logo">
            <div>
                <a href="/site/index"><img src="/img/logo/audi_logo.png" alt=""></a>
            </div>
        </div>
    </div>

    <!--Navigation-->
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <?=Nav::widget([
                    'options' => [
                        'class' => 'nav navbar-nav'
                    ],
                    'items' => [

                        ['label' => 'Models','url' => '/model/list'],
                        ['label' => 'Service',
                            'items' => [
                                ['label' => 'Inspection','url' => '/service/inspection'],
                                ['label' => 'TestDrive','url' => '/service/testDrive'],
                                ['label' => 'Guarantee','url' => '/service/view/garantee'],
                                ['label' => 'Insurance','url' => '/service/view/insurance'],
                            ],
                        ],
                        ['label' => 'Technology',
                            'items' => [
                                ['label' => 'Engine','url' => '/engine/list'],
                                ['label' => 'Transmission','url' => '/transmission/list'],
                                ['label' => 'Quattro','url' => '/technology/quattro'],
                                ['label' => 'Lighting','url' => '/technology/lighting'],
                                ['label' => 'Assistent','url' => '/technology/assistent'],
                                ['label' => 'Connect','url' => '/technology/connect'],
                            ],
                        ],
                        ['label' => 'News','url' => '/article/news/list'],
                        ['label' => 'Sport','url' => '/article/sport/list'],
                        ['label' => 'Dealers','url' => '/dealer/list'],
                    ]
                ]);?>
                <?php if(!Yii::$app->user->isGuest):?>
                    <?=Nav::widget([
                        'options' => [
                            'class' => 'nav navbar-nav admin',
                        ],
                        'items' => [
                            ['label' => 'Admin',
                                'items' => [
                                    ['label' => 'Logout','url' => '/site/logout'],
                                    ['label' => 'Upload Image','url' => '/image/upload'],
                                    ['label' => 'List Image','url' => '/image/list'],
                                ]
                            ]
                        ]
                    ]);?>
                <?php endif;?>
            </div>
        </div>
    </nav>
    <div>
        <?=$content?>
    </div>
    <img class="scrollTop" src="/img/logo/up-arrow.png" alt="">
    <!--Footer-->
    <footer class="footer">
        <div class="container">
            <p>&copy; AUDI AG. All rights reserved</p>
        </div>
    </footer>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
