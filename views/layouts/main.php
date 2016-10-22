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
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <!--Logo Company-->

    <div class="logo_container">
        <div class="audi_logo">
            <div>
                <a href="/site/index"><img src="/img/audi_logo.png" alt=""></a>
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
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Models</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Inspection</a></li>
                            <li><a href="#">Corporate sales</a></li>
                            <li><a href="#">Insurance</a></li>
                            <li><a href="#">Test drive</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Technology<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/engine/list">Engine</a></li>
                            <li><a href="#">Transmission</a></li>
                            <li><a href="#">Quattro</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li><a href="#">Assistent system</a></li>
                            <li><a href="#">Information system</a></li>
                        </ul>
                    </li>
                    <li><a href="">News</a></li>
                    <li><a href="">Sport</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dillers<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Kiev</a></li>
                            <li><a href="#">Kharkiv</a></li>
                            <li><a href="#">Lviv</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">History</a></li>
                            <li><a href="#">Museum</a></li>
                        </ul>
                    </li>
                    <?php if(!Yii::$app->user->isGuest):?>
                    <li><a href="/site/logout">Logout</a></li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<!--Footer-->

<footer class="footer">
    <div class="container">
        <div class="col-sm-3">
            <ul>
                <li>Inspection</li>
                <li>Corporate Sales</li>
                <li>Insurance</li>
                <li>Test drive</li>
            </ul>
        </div>
        <div class="col-sm-9">
            <h3>About Us</h3>
            <p>Audi is a German automobile manufacturer that designs, engineers, produces, markets and distributes
                luxury vehicles. Audi oversees worldwide operations from its headquarters in Ingolstadt, Bavaria,
                Germany. Audi-branded vehicles are produced in nine production facilities worldwide.</p>
        </div>
    </div>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
