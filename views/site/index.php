<?php

/* @var $this yii\web\View */

?>

<!--Slide-->

<section class="slider">
    <div class="flexslider">
        <ul class="slides">
            <?php foreach ($slider as $sliderItem):?>
                <li>
                    <img src="/<?=$sliderItem?>"/>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</section>

<!--Services-->

<section class="service clearfix">
    <div class="container">
        <h2>Audi service</h2>
        <ul class="service-list clearfix">
            <?php foreach ($services as $serviceItem):?>
                <li class="col-md-3 col-xs-6 service-item">
                    <img src="/img/service/<?=$serviceItem->title;?>.jpg" alt="">
                    <p><?=$serviceItem->title;?></p>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</section>

<!--News-->

<section class="news clearfix">
    <div class="container clearfix">
        <h2>Audi News</h2>
        <ul id="newsTab" class="nav nav-pills">
            <li class="active">
                <a href="#news" data-toggle="tab">News</a>
            </li>
            <li>
                <a href="#sport" data-toggle="tab">Sport</a>
            </li>
        </ul>
        <div id="newsContent" class="tab-content clearfix">
            <div class="tab-pane fade in active clearfix" id="news">
                <?php foreach ($news as $newsItem):?>
                    <div class="item col-md-3 col-xs-6">
                        <img src="/img/article/<?=$newsItem->title?>/general.jpg" alt="">
                        <div class="item-info">
                            <a href="/article/<?=$newsItem->id?>" class="news_title text-center"><?=$newsItem->title;?></a>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="tab-pane fade clearfix" id="sport">
                <?php foreach ($sport as $sportItem):?>
                    <div class="item col-md-3 col-xs-6">
                        <img src="/img/article/<?=$sportItem->title?>/general.jpg" alt="">
                        <div class="item-info">
                            <a href="/article/<?=$sportItem->id?>"><?=$sportItem->title;?></a>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>

