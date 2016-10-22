<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 22.10.16
 * Time: 15:55
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="container custom-form">
    <h2 class="text-center">Create Engine</h2>
    <div class="col-md-8 col-md-offset-2">
        <?php if(Yii::$app->session->hasFlash('update')):?>
            <?php
            $success = Yii::$app->session->getFlash('update');
            echo \yii\bootstrap\Alert::widget([
                'options' => [
                    'class' => 'alert-success'
                ],
                'body' => $success
            ]);
            ?>
        <?php endif;?>
        
        <?php $form = ActiveForm::begin();?>
        <?= $form->field($model,'type')->textInput(['value' => $engine->type]);?>
        <?= $form->field($model,'num_cylinders')->textInput(['value' => $engine->num_cylinders]);?>
        <?= $form->field($model,'displacment')->textInput(['value' => $engine->displacment]);?>
        <?= $form->field($model,'power')->textInput(['value' => $engine->power]);?>
        <?= $form->field($model,'rmp')->textInput(['value' => $engine->rmp]);?>
        <?= $form->field($model,'torque')->textInput(['value' => $engine->torque]);?>
        <?= $form->field($model,'compression')->textInput(['value' => $engine->compression]);?>
        <?= $form->field($model,'description')->textarea(['value' => $engine->description]);?>
        <?= Html::submitButton('Update Engine',['class' => 'btn btn-success']);?>
        <?php $form->end();?>
    </div>
</div>
