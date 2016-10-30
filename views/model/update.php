<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 12:19
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="container custom-form">
    <h2 class="text-center">Create Engine</h2>
    <div class="col-md-8 col-md-offset-2">
        <?php if(Yii::$app->session->hasFlash('model_update')):?>
            <?php
            $success = Yii::$app->session->getFlash('model_update');
            echo \yii\bootstrap\Alert::widget([
                'options' => [
                    'class' => 'alert-success'
                ],
                'body' => $success
            ]);
            ?>
        <?php endif;?>

        <?php $form = ActiveForm::begin();?>
        <?= $form->field($model,'name')->textInput(['value' => $modelItem->name]);?>
        <?= Html::submitButton('Update Model',['class' => 'btn btn-update']);?>
        <?php $form->end();?>
    </div>
</div>
