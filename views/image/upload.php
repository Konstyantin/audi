<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 23:22
 */

use yii\widgets\ActiveForm;
use kartik\file\FileInput;
?>
<h2 class="text-center">Upload Image</h2>
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <?php if(Yii::$app->session->hasFlash('image_upload')):?>
            <?php
            $success = Yii::$app->session->getFlash('image_upload');
            echo \yii\bootstrap\Alert::widget([
                'options' => [
                    'class' => 'alert-success'
                ],
                'body' => $success
            ]);
            ?>
        <?php endif;?>
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

        <?= $form->field($model, 'imageFiles[]')->widget(FileInput::classname(),[
            'options' => [
                'accept' => 'image/*',
                'multiple' => true,
            ],
        ]) ?>
        <?= $form->field($model,'path')->textInput(['placeholder' => 'img/']);?>
        <?php ActiveForm::end() ?>
    </div>
</div>