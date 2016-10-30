<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 25.10.16
 * Time: 21:34
 */
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;

?>

<div class="list-image">
    <h2 class="text-center">Write path to catalog</h2>
    <?php Pjax::begin();?>
    <div class="container list-image-form">
        <div class="col-md-6 col-md-offset-3">
            <?php if(Yii::$app->session->hasFlash('image_delete')):?>
                <?php
                $success = Yii::$app->session->getFlash('image_delete');
                echo \yii\bootstrap\Alert::widget([
                    'options' => [
                        'class' => 'alert-success'
                    ],
                    'body' => $success
                ]);
                ?>
            <?php endif;?>
            
            <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]);?>
            <?= $form->field($model,'path')->textInput([
                'name' => 'path',
                'value' => $path,
                'placeholder' => 'Choose directory'
            ]);?>
            <?= Html::submitButton('View Images',['class' => 'btn btn-create']);?>
            <?php $form::end();?>
        </div>
    </div>
    <?php if($imageList):?>
        <h2 class="text-center">Search results</h2>
        <div class="list-item">
        <?php foreach ($imageList as $imgItem):?>
            <hr>
            <div class="container item">
                <div class="col-lg-6">
                    <img class="imgItem" src="/<?= $imgItem;?>" alt="">
                </div>
                <div class="col-lg-6 item-content">
                    <p>Path: <span><?=$imgItem;?></span></p>
                    <div class="model-manage">
                        <a href="/image/delete" class="btn btn-delete delete" data-image="<?=$imgItem;?>">Image Delete</a>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
        </div>
    <?php endif;?>
    <?php Pjax::end();?>
</div>


