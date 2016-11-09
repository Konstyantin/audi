<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.11.16
 * Time: 23:21
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
?>
<div class="container">
    <h2 class="text-center">Select Engine</h2>
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
            <?= $form->field($model,'engine_id')->dropDownList(ArrayHelper::map($engines,'id','type'));?>
            <?= Html::submitButton('Select Engine',['class' => 'btn btn-primary']);?>
        <?php $form::end();?>
    </div>
</div>