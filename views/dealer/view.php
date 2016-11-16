<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 16.11.16
 * Time: 0:39
 */
use yii2mod\google\maps\markers\GoogleMaps;
?>

<div class="container">
    <a href="/dealer/update/<?=$dealer->id?>" class="btn btn-primary">Update</a>
    <a href="/dealer/test/<?=$dealer->id?>" class="btn btn-success">View tests</a>
    <a href="/dealer/service/<?=$dealer->id?>" class="btn btn-success">View service</a>
    <a href="/dealer/delete/<?=$dealer->id?>" class="btn btn-danger">Delete</a>
    <div><?=$dealer->city;?></div>
    <div><?=$dealer->street;?></div>
    <div><?=$dealer->description;?></div>
</div>
