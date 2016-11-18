<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 15.11.16
 * Time: 17:05
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
?>

<div class="container">
    <h2 class="text-center">Update Car</h2>
    <div class="col-md-8 col-md-offset-2">
        <?php $form = ActiveForm::begin();?>
            <?=$form->field($model,'name')->textInput(['value' => $car->name]);?>
            <?=$form->field($model,'price')->textInput(['value' => $car->price]);?>
            <?=$form->field($model,'model_id')->dropDownList(ArrayHelper::map($modelList,'id','name'));?>
            <?=Html::submitButton('Update Car',['class' => 'btn btn-primary']);?>
        <?php $form::end();?>
    </div>
</div>