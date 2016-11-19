<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 12.11.16
 * Time: 8:17
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\datetime\DateTimePicker;
use yii\helpers\ArrayHelper;

?>

<div class="service-description">
    <img src="/img/service/<?=$service->title?>.jpg" alt="">
    <h2><?=$service->title;?></h2>
    <div class="container service-content">
        <?=$service->content;?>
        <?php if(!Yii::$app->user->isGuest):?>
            <a href="/service/update/<?=$service->id?>" class="btn btn-update">Update</a>
        <?php endif;?>
    </div>
</div>
<div class="service-register clearfix">
    <h2 class="text-center">Your Data</h2>
    <div class="col-md-8 col-md-offset-2">
        <?php $form = ActiveForm::begin();?>
        <?=$form->field($model,'first_name')->textInput();?>
        <?=$form->field($model,'last_name')->textInput();?>
        <?=$form->field($model,'phone')->textInput();?>
        <?=$form->field($model,'email')->textInput();?>
        <?=$form->field($model,'register_inspection')->widget(DateTimePicker::className(),[
            'name' => 'dp_3',
            'type' => DateTimePicker::TYPE_COMPONENT_APPEND,
            'value' => '23-Feb-1982 12:35 AM',
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'dd-M-yyyy HH:ii P'
            ]
        ]);?>
        <?=$form->field($model,'dealer')->dropDownList(ArrayHelper::map($dealers,'id','city'));?>
        <?=$form->field($model,'car')->dropDownList(ArrayHelper::map($cars,'name','name'));?>
        <?=$form->field($model,'mileage')->textInput();?>
        <?=$form->field($model,'license_plate')->textInput();?>
        <?=Html::submitButton('Sing up',['class' => 'btn btn-success']);?>
        <?php $form::end();?>
    </div>
</div>
