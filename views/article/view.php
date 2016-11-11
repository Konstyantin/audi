<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 11.11.16
 * Time: 16:00
 */
?>
<div class="container article-view">
    <div class="manage">
        <a href="/article/update/<?=$article->id;?>" class="btn btn-primary">Update</a>
        <a href="/article/delete/<?=$article->id?>" class="btn btn-danger">Delete</a>
    </div>
    <header>
        <h2 class="text-center"><?=$article->title?></h2>
    </header>
    <div class="content">
        <?=$article->content;?>
    </div>
</div>
