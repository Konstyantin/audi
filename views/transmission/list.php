<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 23.10.16
 * Time: 20:47
 */

use app\models\image\LoadWidget;
?>
<div class="transmission-header">
    <div>
        <img class="engine-img" src="/img/transmission/general.jpg" alt="">
        <p>Audi Transsmisiion</p>
    </div>
</div>
<div class="transmission">
    <?php if(Yii::$app->session->hasFlash('delete_transmission')):?>
        <?php
        $success = Yii::$app->session->getFlash('delete_transmission');
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'alert-success'
            ],
            'body' => $success
        ]);
        ?>
    <?php endif;?>

    <div class="manage-container">
        <?php if(!Yii::$app->user->isGuest):?>
            <div class="manage-control">
                <a href="/transmission/create" class="btn btn-create">Create Transmission</a>
                <a href="/transmission/delete-list" class="btn btn-delete">Delete All</a>
            </div>
        <?php endif;?>
    </div>
    <?php foreach ($list as $item):?>
        <div class="col-lg-3 col-xs-6 item">
            <img src="/img/transmission/<?=$item->name?>.jpg" alt="">
            <h2 class="text-center"><a href="<?= '/transmission/' . $item->id; ?>"><?= $item->name;?></a></h2>
            <?php if(!Yii::$app->user->isGuest):?>
                <a href="<?= '/transmission/update/' . $item->id; ?>" class="pull-left btn btn-update">Update</a>
                <a href="<?= '/transmission/delete/' . $item->id; ?>" class="pull-right btn btn-delete">Delete</a>
            <?php endif;?>
        </div>
    <?php endforeach;?>
</div>