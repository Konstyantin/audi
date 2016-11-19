<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 0:57
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="container custom-form">
    <h2 class="text-center">Create Model</h2>
    <div class="col-md-8 col-md-offset-2">
        <?php $form = ActiveForm::begin();?>
        <?= $form->field($model,'name')->textInput(['placeholder' => 'Name Model']);?>
        <?= Html::submitButton('Create Model',['class' => 'btn btn-success']);?>
        <?php $form->end();?>
    </div>
</div>
