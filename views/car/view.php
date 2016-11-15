<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 05.11.16
 * Time: 14:25
 */
?>
<section class="view-car">
    <div class="general">
        <img style="width: 100%" src="/img/car/<?=$car->name;?>/general.jpg" alt="">
    </div>
    <div class="short-view container">
        <h2 class="text-center">Technical Specs</h2>
        <div class="col-lg-6 car-logo">
            <img src="/img/car/logo/<?=$car->name;?>.png" alt="">
        </div>
        <div class="col-lg-6">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Params</th>
                    <th class="text-right">Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Engine</td>
                    <td class="text-right"><?=$car->engine->type;?></td>
                </tr>
                <tr>
                    <td>Power</td>
                    <td class="text-right"><?=$car->engine->power . ' kW';?></td>
                </tr>
                <tr>
                    <td>Speed</td>
                    <td class="text-right"><?=$car->performance->speed . ' km/h';?></td>
                </tr>
                <tr>
                    <td>Acceleration</td>
                    <td class="text-right"><?=$car->performance->acceleration . ' secs'?></td>
                </tr>
                <tr>
                    <td>Urban</td>
                    <td class="text-right"><?=$car->transmission->line?></td>
                </tr>
                </tbody>
            </table>
            <a href="<?='/car/details/' . $car->name;?>" class="btn btn-success">View Datails</a>
            <a href="<?='/car/update/' . $car->id;?>" class="btn btn-primary">Update</a>
            <a href="<?='/car/delete/' . $car->id;?>" class="btn btn-danger">Delete</a>
        </div>
    </div>
    <div class="highlights">
        <h2 class="text-center">Highlights</h2>
        <ul class="list-item clearfix">
            <li class="item col-xs-6">
                <img src="<?='/img/car/engine/' . $car->engine->type . '.jpg';?>" alt="">
                <div class="item-info">
                    <a href="<?='/engine/' . $car->engine->id;?>"><?=$car->engine->type . ' ' . $name;?></a>
                </div>
            </li>
            <li class="item col-xs-6">
                <img src="<?='/img/car/transmission/'. $car->transmission->line . '.jpg'?>" alt="">
                <div class="item-info">
                    <a href="<?='/transmission/' . $car->transmission->id;?>"><?=$car->transmission->line . ' ' . $name;?></a>
                </div>
            </li>
        </ul>
    </div>
    <div class="demo-gallery">
        <h2 class="text-center">Gallery</h2>
        <ul id="lightgallery" class="list-unstyled row">
            <?php foreach ($imgGallery as $galleryItem):?>
                <li class="col-md-3 col-xs-6 gallery-item" data-responsive="<?='/'.$galleryItem;?>" data-src="<?='/'.$galleryItem;?>">
                    <a href="<?='/'.$galleryItem;?>">
                        <img  src="<?='/'.$galleryItem;?>">
                    </a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</section>