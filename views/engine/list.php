<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 21.10.16
 * Time: 22:23
 */
?>
<div class="engine-header">
    <div>
        <img class="engine-img" src="/img/engine/AU130532_large.jpg" alt="">
        <p>Audi Engines</p>
    </div>
</div>
<div class="container engine">
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

    <div class="engine-manage">
        <a href="/engine/create" class="btn btn-default">Create Engine</a>
        <a href="/engine/delete-list" class="btn btn-default">Delete All</a>
        <hr>
    </div>
    <?php foreach ($list as $item):?>
        <div class="col-lg-3 col-xs-6 item">
            <img src="/img/engine/A161508_medium.jpg" alt="">
            <h2 class="text-center"><a href="<?= '/engine/' . $item->id; ?>"><?= $item->type;?></a></h2>
            <div class="col-lg-4 pull-left btn-update">
                <a href="<?= '/engine/update/' . $item->id; ?>" class="btn btn-default">Update</a>
            </div>
            <div class="col-lg-4 pull-right">
                <a href="<?= '/engine/delete/' . $item->id; ?>" class="btn btn-default">Delete</a>
            </div>
        </div>
    <?php endforeach;?>
</div>
