<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 04.11.16
 * Time: 16:05
 */
use app\models\image\LoadWidget;
use app\models\image\ImageModel;
use app\models\car\Car;
?>


<?php foreach ($imgs as $imgItem):?>
    <?php
    $img = ImageModel::multiexplode(['.','/'],$imgItem);
    $img = $img[3];
    ?>
    <?php foreach ($list as $item):?>
        <?php if(ImageModel::checkMatch($item->name,$img)):?>
            <div class="col-md-4 col-xs-6 item">
                <img src="<?='/'.$imgItem;?>" alt="">
                <h2 class="text-center">
                    <a href="<?='/car/view/'.$item->name;?>">
                        <?=Car::carName($item->name) ? Car::carName($item->name) : $item->name?>
                    </a>
                </h2>
            </div>
        <?php endif;?>
    <?php endforeach;?>
<?php endforeach;?>
