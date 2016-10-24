<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 11:48
 */
?>
<div class="model-header">
    <div>
        <img class="engine-img" src="/img/models/AU150161_medium.jpg" alt="">
        <p>Audi Models</p>
    </div>
</div>
<div class="container model">
    <?php if(Yii::$app->session->hasFlash('delete_model')):?>
        <?php
        $success = Yii::$app->session->getFlash('delete_model');
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'alert-success'
            ],
            'body' => $success
        ]);
        ?>
    <?php endif;?>

    <div class="model-manage">
        <a href="/model/create" class="btn btn-default">Create Model</a>
        <a href="/model/delete-list" class="btn btn-default">Delete All</a>
        <hr>
    </div>
    <?php foreach ($list as $item):?>
        <div class="col-lg-3 col-xs-6 item">
            <img src="/img/models/a7_logo.png" alt="">
            <h2 class="text-center"><a href="<?= '/model/' . $item->id; ?>"><?= $item->name;?></a></h2>
            <div class="col-lg-4 pull-left btn-update">
                <a href="<?= '/model/update/' . $item->id; ?>" class="btn btn-default">Update</a>
            </div>
            <div class="col-lg-4 pull-right">
                <a href="<?= '/engine/delete/' . $item->id; ?>" class="btn btn-default">Delete</a>
            </div>
        </div>
    <?php endforeach;?>
</div>
