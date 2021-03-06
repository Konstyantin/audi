<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 11.11.16
 * Time: 13:55
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use codezeen\yii2\tinymce\TinyMce;
use yii\helpers\ArrayHelper;
?>

<div class="container">
    <h2 class="text-center">Create Article</h2>
    <div class="form">
        <?php if(Yii::$app->session->hasFlash('create_article')):?>
            <?php
            $success = Yii::$app->session->getFlash('create_article');
            echo \yii\bootstrap\Alert::widget([
                'options' => [
                    'class' => 'alert-success'
                ],
                'body' => $success
            ]);
            ?>
        <?php endif;?>
        <?php $form = ActiveForm::begin();?>
            <?=$form->field($model,'category')->dropDownList(ArrayHelper::map($category,'name','name'));?>
            <?=$form->field($model,'title')->textInput();?>
            <?=$form->field($model,'content')->widget(
            TinyMce::className(),
            [
                'options' => [
                    'rows' => 30,
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
        <?=Html::submitButton('Create Article',['class' => 'btn btn-success']);?>
        <?php $form::end();?>
    </div>
</div>
