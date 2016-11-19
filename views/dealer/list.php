<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 15.11.16
 * Time: 22:57
 */
use yii2mod\google\maps\markers\GoogleMaps;
?>
<div class="container">
    <?=GoogleMaps::widget([
        'userLocations' => [
            [
                'location' => [
                    'country' => 'Ukraine',
                    'address' => 'Kharkiv',
                    'street' => 'Shevchenka 135',
                ],
                'htmlContent' => '<h1>Kharkov</h1>'
            ],
            [
                'location' => [
                    'country' => 'Ukraine',
                    'address' => 'Kiev',
                    'street' => 'Dehtiarivska St, 54',
                ],
                'htmlContent' => '<h1>Kiev</h1>'
            ],
            [
                'location' => [
                    'country' => 'Ukraine',
                    'address' => 'Odessa',
                    'street' => 'Marshala Zhukova Ave'
                ],
                'htmlContent' => '<h1>Odessa</h1>'
            ],
        ],
    ]);?>
    <?php if(!Yii::$app->user->isGuest):?>
        <div class="dealer-manage">
            <a href="/dealer/add-car" class="btn btn-create">Add test car</a>
            <a href="/dealer/test-cars" class="btn btn-create">Test cars list</a>
        </div>
    <?php endif;?>
    <h2 class="text-center">Dealer list</h2>
    <ul class="dealer-list clearfix">
        <?php foreach ($dealers as $dealerItem):?>
            <li class="item col-md-6">
                <img src="/img/dealer/<?=$dealerItem->city;?>.jpg" alt="">
                <div class="item-info">
                    <a href="/dealer/<?=$dealerItem->id?>"><?=$dealerItem->city;?></a>
                </div>
            </li>
        <?php endforeach;?>
    </ul>
</div>


