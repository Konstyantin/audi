<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 8:50
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use app\models\base\BaseRecord;

/**
 * Get all engine, transmission, models for realisation dropDownList Engine, Transmission, Models
 */
$engines = ArrayHelper::map(BaseRecord::getAll('engine'),'id','type');
$transmission = ArrayHelper::map(BaseRecord::getAll('transmission'),'id','line');
$models = ArrayHelper::map(BaseRecord::getAll('models'),'id','name');
?>


<div id="rootwizard" class="container">
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
    <?php endif;?>
    <h2 class="text-center">Create Car</h2>
    <div class="tab-content">
        <div id="bar" class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
        </div>
        <div class="tab-pane active">
            <?php Pjax::begin();?>
                <?php $formBody = ActiveForm::begin(['options' => ['data-pjax' => true]]);?>
                <?= $formBody->field($body,'height')->textInput(['placeholder' => 'Height Car']);?>
                <?= $formBody->field($body,'width')->textInput(['placeholder' => 'Width Car']);?>
                <?= $formBody->field($body,'length')->textInput(['placeholder' => 'Length Car']);?>
                <?= $formBody->field($body,'wheelbase')->textInput(['placeholder' => 'Wheelbase Car']);?>
                <?= $formBody->field($body,'drag')->textInput(['placeholder' => 'Drag Car']);?>
                <?= $formBody->field($body,'weight')->textInput(['placeholder' => 'Weight Car']);?>
                <?= Html::submitButton('Create Body',['class' => 'btn btn-primary submit_record','id' => 1]);?>
                <?php $formBody::end();?>
            <?php Pjax::end();?>
        </div>
        <div class="tab-pane">
            <?php Pjax::begin();?>
                <?php $formPerformance = ActiveForm::begin(['options' => ['data-pjax' => true]]);?>
                <?= $formPerformance->field($performance,'speed')->textInput(['placeholder' => 'Speed Car']);?>
                <?= $formPerformance->field($performance,'acceleration')->textInput(['placeholder' => 'Acceleration Car']);?>
                <?= Html::submitButton('Create Performance',['class' => 'btn btn-primary submit_record','id' => 2]);?>
                <?php $formPerformance::end();?>
            <?php Pjax::end();?>
        </div>
        <div class="tab-pane">
            <?php Pjax::begin();?>
                <?php $formFuel = ActiveForm::begin(['options' => ['data-pjax' => true]]);?>
                <?= $formFuel->field($fuel,'urban')->textInput(['placeholder' => 'Urban Car']);?>
                <?= $formFuel->field($fuel,'extra_urban')->textInput(['placeholder' => 'Extra Urban']);?>
                <?= $formFuel->field($fuel,'combined')->textInput(['placeholder' => 'Combined Urban']);?>
                <?= $formFuel->field($fuel,'emission')->textInput(['placeholder' => 'Emission Car']);?>
                <?= Html::submitButton('Create Urban',['class' => 'btn btn-primary submit_record','id' => 3]);?>
                <?php $formFuel::end();?>
            <?php Pjax::end();?>
        </div>
        <div class="tab-pane">
            <?php Pjax::begin();?>
                <?php $formCar = ActiveForm::begin(['options' => ['data-pjax' => true]]);?>
                <?= $formCar->field($car,'name')->textInput(['placeholder' => 'Name Car']);?>
                <?= $formCar->field($car,'engine_id')->dropDownList($engines);?>
                <?= $formCar->field($car,'transmission_id')->dropDownList($transmission);?>
                <?= $formCar->field($car,'price')->textInput(['placeholder' => 'Price Car']);?>
                <?= $formCar->field($car,'model_id')->dropDownList($models);?>
                <?= Html::submitButton('Create Car',['class' => 'btn btn-primary submit_record','id' => 4]);?>
                <?php $formCar::end();?>
            <?php Pjax::end();?>
        </div>
    </div>
</div>
