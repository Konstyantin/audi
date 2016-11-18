<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 16.11.16
 * Time: 0:39
 */
use yii2mod\google\maps\markers\GoogleMaps;
?>
<img src="/img/dealer/general.jpg" alt="">
<div class="container">
    <div class="dealer-manage">
        <a href="/dealer/update/<?=$dealer->id?>" class="btn btn-primary">Update</a>
        <a href="/dealer/test-list/<?=$dealer->id?>" class="btn btn-success">View tests</a>
        <a href="/dealer/inspection-list/<?=$dealer->id?>" class="btn btn-success">View service</a>
        <a href="/dealer/delete/<?=$dealer->id?>" class="btn btn-danger">Delete</a>
    </div>
    <h2 class="text-center"><?=$dealer->city;?></h2>
    <div><?=$dealer->description;?></div>
</div>
