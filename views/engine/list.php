<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 21.10.16
 * Time: 22:23
 */

use app\models\image\LoadWidget;
?>
<div class="engine-header">
    <div>
        <img class="engine-img" src="/img/engine/general.jpg" alt="">
    </div>
    <?php if(Yii::$app->session->hasFlash('delete')):?>
        <?php
        $success = Yii::$app->session->getFlash('delete');
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'alert-success'
            ],
            'body' => $success
        ]);
        ?>
    <?php endif;?>
</div>
<div class="engine container">
    <?php if(!Yii::$app->user->isGuest):?>
    <div class="manage-container">
            <div class="manage-control">
                <a href="/engine/create" class="btn btn-create">Create Engine</a>
                <a href="/engine/delete-list" class="btn btn-delete">Delete All</a>
            </div>
    </div>
    <?php endif;?>
    <?php foreach ($list as $item):?>
        <div class="col-lg-3 col-xs-6 item">
            <img src="/img/engine/<?=$item->name?>.jpg" alt="">
            <h2 class="text-center"><a href="/engine/<?=$item->id;?>"><?=$item->name;?></a></h2>
            <?php if(!Yii::$app->user->isGuest):?>
                <a href="/engine/update/<?=$item->id;?>" class="btn pull-left btn-update">Update</a>
                <a href="/engine/delete/<?= $item->id;?>" class="btn pull-right btn-delete">Delete</a>
            <?php endif;?>
        </div>
    <?php endforeach;?>
</div>
