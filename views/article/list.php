<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 11.11.16
 * Time: 14:26
 */
?>

<div class="clearfix article">
    <h2 class="text-center">Article list</h2>
    <ul class="list-item">
        <div class="manage">
            <a href="/article/delete-list" class="btn btn-danger">Delete all</a>
        </div>
        <?php foreach ($list as $item):?>
            <li class="item col-xs-6 col-md-4">
                <img src="/img/news/A164202_large.jpg" alt="">
                <div class="item-info">
                    <a href="/article/<?=$item->id?>"><?=$item->title;?></a>
                </div>
            </li>
        <?php endforeach;?>
    </ul>
</div>
