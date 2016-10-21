<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 13.10.16
 * Time: 13:49
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="container login">
    <div class="row">
        <h2 class="text-center">Login</h2>
        <div class="col-lg-6 col-lg-offset-3">
            <?php if(Yii::$app->session->hasFlash('error')):?>
                <?php
                $success = Yii::$app->session->getFlash('error');
                echo \yii\bootstrap\Alert::widget([
                    'options' => [
                        'class' => 'alert-danger'
                    ],
                    'body' => $success
                ]);
                ?>
            <?php endif;?>
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'login')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
