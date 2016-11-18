<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 13.11.16
 * Time: 17:47
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
?>
<div class="service-description">
    <img src="/img/service/<?=$service->title?>.jpg" alt="">
    <h2><?=$service->title;?></h2>
    <div class="container service-content">
        <?=$service->content;?>
        <a href="/service/update/<?=$service->id?>" class="btn btn-primary">Update </a>
    </div>
</div>
<?php if(Yii::$app->session->hasFlash('success')):?>
    <?php
    $success = Yii::$app->session->getFlash('success');
    echo \yii\bootstrap\Alert::widget([
        'options' => [
            'class' => 'alert-success'
        ],
        'body' => $success
    ]);
    ?>
<?php elseif (Yii::$app->session->hasFlash('fail_test')):?>
    <?php
    $fail = Yii::$app->session->getFlash('fail_test');
    echo \yii\bootstrap\Alert::widget([
        'options' => [
            'class' => 'alert-danger'
        ],
        'body' => $fail
    ]);
    ?>
<?php endif;?>
<div class="service-register clearfix">
    <div class="col-md-8 col-md-offset-2">
        <h2 class="text-center">Your Data</h2>
        <?php $form = ActiveForm::begin();?>
        <?=$form->field($model,'first_name')->textInput(['placeholder' => 'First name'])->label(false);?>
        <?=$form->field($model,'last_name')->textInput(['placeholder' => 'Last name'])->label(false);?>
        <?=$form->field($model,'phone')->textInput(['placeholder' => 'Phone'])->label(false);?>
        <?=$form->field($model,'email')->textInput(['placeholder' => 'Email'])->label(false);?>
        <?=$form->field($model,'dealer')->dropDownList(ArrayHelper::map($dealer,'id','city'))->label(false);?>
        <?=$form->field($model,'car')->dropDownList(ArrayHelper::map($car,'name','name'))->label(false);?>
        <?=$form->field($model,'month')->textInput(['placeholder' => 'Month'])->label(false);?>
        <?=$form->field($model,'day')->textInput(['placeholder' => 'Day'])->label(false);?>
        <?=$form->field($model,'time')->textInput(['placeholder' => 'Time'])->label(false);?>
        <?=Html::submitButton('Sing up',['class' => 'btn btn-success']);?>
        <?php $form::end();?>
    </div>
</div>
