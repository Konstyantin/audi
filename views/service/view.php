<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 12.11.16
 * Time: 21:47
 */
?>
<div class="service-description">
    <img src="/img/service/<?=$service->title?>.jpg" alt="">
    <h2><?=$service->title;?></h2>
    <div class="container service-content">
        <?=$service->content;?>
        <?php if(!Yii::$app->user->isGuest):?>
            <a href="/service/update/<?=$service->id?>" class="btn btn-primary">Update</a>
        <?php endif;?>
    </div>
</div>