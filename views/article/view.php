<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 11.11.16
 * Time: 16:00
 */
?>
<div class="container article-view">
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
    <br>
    <?php if(!Yii::$app->user->isGuest):?>
        <div class="manage">
            <a href="/article/update/<?=$article->id;?>" class="btn btn-update">Update</a>
            <a href="/article/delete/<?=$article->id?>" class="btn btn-delete">Delete</a>
        </div>
    <?php endif;?>
    <header>
        <h2><?=$article->title?></h2>
    </header>
    <div class="content">
        <?=$article->content;?>
    </div>
</div>
