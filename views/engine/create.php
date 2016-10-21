<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 21.10.16
 * Time: 19:54
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="container custom-form">
    <h2 class="text-center">Create Engine</h2>
    <div class="col-md-8 col-md-offset-2">
        <?php $form = ActiveForm::begin();?>
        <?= $form->field($model,'type')->textInput(['placeholder' => 'Type Engine']);?>
        <?= $form->field($model,'num_cylinders')->textInput(['placeholder' => 'Type Engine']);?>
        <?= $form->field($model,'displacment')->textInput(['placeholder' => 'Type Engine']);?>
        <?= $form->field($model,'power')->textInput(['placeholder' => 'Type Engine']);?>
        <?= $form->field($model,'description')->textarea(['placeholder' => 'Type Engine']);?>
        <?= Html::submitButton('Create Engine',['class' => 'btn btn-success']);?>
        <?php $form->end();?>
    </div>
</div>

