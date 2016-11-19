<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 23.10.16
 * Time: 21:22
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="container custom-form">
    <h2 class="text-center">Create Engine</h2>
    <div class="col-md-8 col-md-offset-2">

        <?php if(Yii::$app->session->hasFlash('update_transmission')):?>
            <?php
            $success = Yii::$app->session->getFlash('update_transmission');
            echo \yii\bootstrap\Alert::widget([
                'options' => [
                    'class' => 'alert-success'
                ],
                'body' => $success
            ]);
            ?>
        <?php endif;?>

        <?php $form = ActiveForm::begin();?>
        <?= $form->field($model,'name')->textInput(['value' => $transmission->name]);?>
        <?= $form->field($model,'level')->textInput(['value' => $transmission->level]);?>
        <?= $form->field($model,'description')->textarea(['value' => $transmission->description]);?>
        <?= Html::submitButton('Update Transmission',['class' => 'btn btn-primary']);?>
        <?php $form->end();?>
    </div>
</div>
