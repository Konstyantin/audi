<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 15.11.16
 * Time: 0:43
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use codezeen\yii2\tinymce\TinyMce;
?>

<div class="container">
    <?php if(Yii::$app->session->hasFlash('update_performance')):?>
        <?php
        $success = Yii::$app->session->getFlash('update_performance');
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'alert-success'
            ],
            'body' => $success
        ]);
        ?>
    <?php endif;?>
    <?php $form = ActiveForm::begin();?>
    <?=$form->field($model,'content')->widget(
        TinyMce::className(),
        [
            'options' => [
                'rows' => 20,
                'value' => $technology->content,
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
        ]);
    ?>
    <?=Html::submitButton('Update Technology',['class' => 'btn btn-primary']);?>
    <?php $form::end();?>
</div>

