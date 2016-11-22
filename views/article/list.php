<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 11.11.16
 * Time: 14:26
 */
use yii\widgets\LinkPager;
?>

<div class="clearfix article container">
    <?php if(Yii::$app->session->hasFlash('delete_article')):?>
        <?php
        $success = Yii::$app->session->getFlash('delete_article');
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'alert-success'
            ],
            'body' => $success
        ]);
        ?>
    <?php endif;?>
    <h2>Article list</h2>
    <ul class="list-item clearfix">
        <div class="manage">
            <a href="/article/list/" class="btn btn-success">Articles List</a>
            <?php if(!Yii::$app->user->isGuest):?>
                <a href="/article/create" class="btn btn-create">Create</a>
                <a href="/article/delete-list" class="btn btn-delete">Delete all</a>
            <?php endif;?>
        </div>
        <?php foreach ($list as $item):?>
            <a href="/article/<?=$item->id?>">
                <li class="item col-xs-6 col-md-4">
                    <img src="/img/article/<?=$item->title?>/general.jpg" alt="">
                    <div class="item-info">
                        <a href="/article/<?=$item->id?>"><?=$item->title;?></a>
                    </div>
                </li>
            </a>
        <?php endforeach;?>
    </ul>
    <?=LinkPager::widget(['pagination' => $pages])?>
</div>
