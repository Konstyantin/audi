<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 14.11.16
 * Time: 23:57
 */
?>
<div class="service-description">
    <h2><?=$technology->title;?></h2>
    <div class="container service-content">
        <?=$technology->content;?>
        <?php if(!Yii::$app->user->isGuest):?>
            <a href="/technology/update/<?=$technology->id?>" class="btn btn-primary">Update</a>
        <?php endif;?>
    </div>
</div>
