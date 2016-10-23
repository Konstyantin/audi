<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 23.10.16
 * Time: 20:16
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="container custom-form">
    <h2 class="text-center">Create Engine</h2>
    <div class="col-md-8 col-md-offset-2">
        <?php $form = ActiveForm::begin();?>
        <?= $form->field($model,'line')->textInput(['placeholder' => 'Line Transmission']);?>
        <?= $form->field($model,'level')->textInput(['placeholder' => 'Level Transmission']);?>
        <?= $form->field($model,'description')->textarea(['placeholder' => 'Description Transmission']);?>
        <?= Html::submitButton('Create Transmission',['class' => 'btn btn-success']);?>
        <?php $form->end();?>
    </div>
</div>

