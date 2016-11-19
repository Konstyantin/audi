<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.11.16
 * Time: 21:53
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="container">
    <h2 class="text-center">Update Performance</h2>
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
        <?= $form->field($model,'speed')->textInput(['value' => $performance->speed]);?>
        <?= $form->field($model,'acceleration')->textInput(['value' => $performance->acceleration]);?>
        <?= Html::submitButton('Update Model',['class' => 'btn btn-primary']);?>
        <?php $form->end();?>
    </div>
</div>
