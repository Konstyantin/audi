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
                    <li class="active">
                        <a href="/model/list">Models</a>
                    </li>
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
                            <li><a href="/transmission/list">Transmission</a></li>
                            <li><a href="#">Quattro</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li><a href="#">Assistent system</a></li>
                            <li><a href="#">Information system</a></li>
                        </ul>
                    </li>
                    <li><a href="/article/news/list">News</a></li>
                    <li><a href="/article/sport/list">Sport</a></li>
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Image<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/image/upload">Upload</a></li>
                            <li><a href="/image/list">View</a></li>
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
    <img class="scrollTop" src="/img/logo/up-arrow.png" alt="">
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
