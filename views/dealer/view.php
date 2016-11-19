<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 16.11.16
 * Time: 0:39
 */
use yii2mod\google\maps\markers\GoogleMaps;
?>
<img src="/img/dealer/general.jpg" alt="">
<div class="container">
    <?php if(!Yii::$app->user->isGuest):?>
        <div class="dealer-manage">
            <a href="/dealer/update/<?=$dealer->id?>" class="btn btn-update">Update</a>
            <a href="/dealer/test-list/<?=$dealer->id?>" class="btn btn-create">View tests</a>
            <a href="/dealer/inspection-list/<?=$dealer->id?>" class="btn btn-create">View service</a>
            <a href="/dealer/delete/<?=$dealer->id?>" class="btn btn-delete">Delete</a>
        </div>
    <?php endif;?>
    <h2><?=$dealer->city;?></h2>
    <div><?=$dealer->description;?></div>
</div>
