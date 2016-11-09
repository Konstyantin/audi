<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 04.11.16
 * Time: 19:17
 */
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
            <?php if(Car::carName($item->name)){
                $carName = Car::carName($item->name);
            }?>
            <div class="col-md-4 col-xs-6 item">
                <img src="<?='/'.$imgItem;?>" alt="">
                <h2 class="text-center">
                    <a href="<?='/car/view/'.$item->name;?>"><?=$carName ? $carName : $item->name;?></a>
                </h2>
                <a href="<?='/car/update/'.$item->name;?>" class="btn pull-left btn-update">Update</a>
                <a href="<?='/car/delete/'.$item->name;?>" class="btn pull-right btn-delete">Delete</a>
            </div>
        <?php endif;?>
    <?php endforeach;?>
<?php endforeach;?>
