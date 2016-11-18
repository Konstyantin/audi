<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 09.11.16
 * Time: 14:18
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
?>
<div class="container">
    <h2 class="text-center">Select Transmission</h2>
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
        <?= $form->field($model,'transmission_id')->dropDownList(ArrayHelper::map($transmissions,'id','name'));?>
        <?= Html::submitButton('Select Transmission',['class' => 'btn btn-primary']);?>
        <?php $form::end();?>
    </div>
</div>
