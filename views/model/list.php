<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 11:48
 */

use app\models\image\LoadImage;
use app\models\image\LoadWidget;
use app\models\image\CustomWidget;
?>
<div class="model-header">
    <div>
        <img class="engine-img" src="/img/models/AU150161_medium.jpg" alt="">
        <p>Audi Models</p>
    </div>
</div>
<div class="model">
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

    <div class="manage-container">
        <div class="manage-control">
            <a href="/car/list" class="btn btn-create">View All</a>
            <a href="/model/create" class="btn btn-create">Create Model</a>
            <a href="/model/delete-list" class="btn btn-delete">Delete All</a>
        </div>
    </div>
    <div class="container">
        <?= LoadWidget::widget([
            'imgs' => $imgs,
            'items' => $list,
            'controller' => 'model'
        ]);?>
    </div>
</div>
