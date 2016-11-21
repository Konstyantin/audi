<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.11.16
 * Time: 22:26
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="container">
    <h2 class="text-center">Update Fuel</h2>
    <div class="col-md-8 col-md-offset-2">
        <?php if(Yii::$app->session->hasFlash('update_fuel')):?>
            <?php
            $success = Yii::$app->session->getFlash('update_fuel');
            echo \yii\bootstrap\Alert::widget([
                'options' => [
                    'class' => 'alert-success'
                ],
                'body' => $success
            ]);
            ?>
        <?php endif;?>

        <?php $form = ActiveForm::begin();?>
            <?= $form->field($model,'urban')->textInput(['value' => $fuel->urban]);?>
            <?= $form->field($model,'extra_urban')->textInput(['value' => $fuel->extra_urban]);?>
            <?= $form->field($model,'combined')->textInput(['value' => $fuel->combined]);?>
            <?= $form->field($model,'emission')->textInput(['value' => $fuel->emission]);?>
            <?= Html::submitButton('Update Fuel',['class' => 'btn btn-primary']);?>
        <?php $form->end();?>
    </div>
</div>
