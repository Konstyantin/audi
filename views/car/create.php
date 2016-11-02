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
?>
<div id="rootwizard" class="container">
    <h2 class="text-center">Create Car</h2>
    <div class="">
        <div class="navbar-inner">
            <div class="container">
                <ul>
                    <li><a href="#tab1" data-toggle="tab">Body</a></li>
                    <li><a href="#tab2" data-toggle="tab">Performance</a></li>
                    <li><a href="#tab3" data-toggle="tab">Third</a></li>
                    <li><a href="#tab4" data-toggle="tab">Fourth</a></li>
                    <li><a href="#tab5" data-toggle="tab">Fifth</a></li>
                    <li><a href="#tab6" data-toggle="tab">Sixth</a></li>
                    <li><a href="#tab7" data-toggle="tab">Seventh</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content">
        <br>
        <div id="bar" class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
        </div>

        <div class="tab-pane" id="tab1">
            <?php $formBody = ActiveForm::begin();?>
                <?= $formBody->field($body,'height')->textInput(['placeholder' => 'Height Car']);?>
                <?= $formBody->field($body,'width')->textInput(['placeholder' => 'Width Car']);?>
                <?= $formBody->field($body,'length')->textInput(['placeholder' => 'Length Car']);?>
                <?= $formBody->field($body,'wheelbase')->textInput(['placeholder' => 'Wheelbase Car']);?>
                <?= $formBody->field($body,'drag')->textInput(['placeholder' => 'Drag Car']);?>
                <?= $formBody->field($body,'weight')->textInput(['placeholder' => 'Weight Car']);?>
                <?= Html::submitButton('Create Body',['class' => 'btn btn-create']);?>
            <?php $formBody::end();?>
        </div>
        <div class="tab-pane" id="tab2">
            <?php $formPerformance = ActiveForm::begin();?>
                <?= $formPerformance->field($performance,'speed')->textInput(['placeholder' => 'Speed Car']);?>
                <?= $formPerformance->field($performance,'acceleration')->textInput(['placeholder' => 'Acceleration Car']);?>
                <?= Html::submitButton('Create Performance',['class' => 'btn btn-create']);?>
            <?php $formPerformance::end();?>
        </div>
        <div class="tab-pane" id="tab3">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, repudiandae.</p>
        </div>
        <div class="tab-pane" id="tab4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, repudiandae.</p>
        </div>
        <div class="tab-pane" id="tab5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, repudiandae.</p>
        </div>
        <div class="tab-pane" id="tab6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, repudiandae.</p>
        </div>
        <div class="tab-pane" id="tab7">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, repudiandae.</p>
        </div>

        <ul class="pager wizard">
            <li class="previous first" style="display:none;"><a href="#">First</a></li>
            <li class="previous"><a href="#">Previous</a></li>
            <li class="next last" style="display:none;"><a href="#">Last</a></li>
            <li class="next"><a href="#">Next</a></li>
        </ul>
    </div>
</div>
