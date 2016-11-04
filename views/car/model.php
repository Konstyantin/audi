<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 04.11.16
 * Time: 18:14
 */
use app\models\image\LoadWidget;
?>

<div class="container">
    <?= LoadWidget::widget([
        'imgs' => $imgs,
        'items' => $list,
        'controller' => 'car',
    ]);?>
</div>
