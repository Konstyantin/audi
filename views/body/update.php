<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.11.16
 * Time: 20:28
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="container">
    <h2 class="text-center">Update Body</h2>
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
        <?= $form->field($model,'height')->textInput(['value' => $body->height]);?>
        <?= $form->field($model,'width')->textInput(['value' => $body->width]);?>
        <?= $form->field($model,'length')->textInput(['value' => $body->length]);?>
        <?= $form->field($model,'wheelbase')->textInput(['value' => $body->wheelbase]);?>
        <?= $form->field($model,'drag')->textInput(['value' => $body->drag]);?>
        <?= $form->field($model,'weight')->textInput(['value' => $body->weight]);?>
        <?= Html::submitButton('Update Body',['class' => 'btn btn-primary submit_record','id' => 1]);?>
        <?php $form::end();?>
    </div>
</div>
