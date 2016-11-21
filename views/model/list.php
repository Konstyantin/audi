<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 11:48
 */

use app\models\image\LoadImage;
use app\models\image\ImageModel;
?>
<div class="model-header">
    <div>
        <img class="engine-img" src="/img/models/AU150161_medium.jpg" alt="">
    </div>
    <?php if(Yii::$app->session->hasFlash('create_model')):?>
        <?php
        $success = Yii::$app->session->getFlash('create_model');
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'alert-success'
            ],
            'body' => $success
        ]);
        ?>
    <?php endif;?>
</div>
<div class="model container">
    <div class="manage-container">
        <div class="manage-control">
            <a href="/car/list" class="btn btn-success">Car List</a>
            <?php if(!Yii::$app->user->isGuest):?>
                <a href="/model/create" class="btn btn-create">Create Model</a>
                <a href="/car/create" class="btn btn-create">Create Car</a>
                <a href="/model/delete-list" class="btn btn-delete">Delete All</a>
            <?php endif;?>
        </div>
    </div>

    <?php foreach ($imgs as $imgItem):?>
        <?php
        $img = ImageModel::multiexplode(['.','/'],$imgItem);
        $img = $img[2];
        ?>
        <?php foreach ($list as $item):?>
            <?php if(ImageModel::checkMatch($item->name,$img)):?>
                <div class="col-md-4 col-xs-6 item">
                    <img src="<?='/'.$imgItem;?>" alt="">
                    <h2 class="text-center">
                        <a href="<?='/model/'.$item->id;?>"><?=$item->name?></a>
                    </h2>
                    <?php if(!Yii::$app->user->isGuest):?>
                        <a href="<?= '/model/update/' . $item->id; ?>" class="btn pull-left btn-update">Update</a>
                        <a href="<?= '/model/delete/' . $item->id; ?>" class="btn pull-right btn-delete">Delete</a>
                    <?php endif;?>
                </div>
            <?php endif;?>
        <?php endforeach;?>
    <?php endforeach;?>
</div>
