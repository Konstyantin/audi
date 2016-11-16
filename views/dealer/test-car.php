<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 16.11.16
 * Time: 14:29
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
?>
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <?php $form = ActiveForm::begin();?>
        <?=$form->field($model,'name')->dropDownList(ArrayHelper::map($cars,'name','name'));?>
        <?=Html::submitButton('Add car',['class' => 'btn btn-success']);?>
        <?php $form::end();?>
    </div>
</div>
