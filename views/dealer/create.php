<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 16.11.16
 * Time: 0:06
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use codezeen\yii2\tinymce\TinyMce;
?>

<div class="container">
    <h2 class="text-center">Create Dealer</h2>
    <div class="form">
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
        <?php $form = ActiveForm::begin();?>
        <?=$form->field($model,'city')->textInput(['placeholder' => 'City']);?>
        <?=$form->field($model,'street')->textInput(['placeholder' => 'Street']);?>
        <?=$form->field($model,'location')->textInput(['placeholder' => 'Location'])?>
        <?=$form->field($model,'description')->widget(
            TinyMce::className(),
            [
                'options' => [
                    'rows' => 15,
                ],
                'settings'        => [
                    'language'               => 'en',
                    'plugins'                => [
                        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                        "searchreplace visualblocks visualchars code fullscreen",
                        "insertdatetime media nonbreaking save table contextmenu directionality",
                        "template paste textcolor"
                    ],
                    'toolbar'                => "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor",
                    'toolbar_items_size'     => 'small',
                    'image_advtab'           => true,
                    'relative_urls'          => false,
                ],
            ]
        )?>
        <?=Html::submitButton('Create Dealer',['class' => 'btn btn-success']);?>
        <?php $form::end();?>
    </div>
</div>
