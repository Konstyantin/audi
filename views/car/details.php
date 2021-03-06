<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.11.16
 * Time: 15:55
 */
?>
<div class="short-view container">
    <header>
        <h2>Technical Specs <span><?=$name;?></span></h2>
    </header>
    <div class="col-lg-6 table-item">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Params</th>
                <th class="text-right">Body</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Height</td>
                <td class="text-right"><?=$car->body->height . ' mm';?></td>
            </tr>
            <tr>
                <td>Width</td>
                <td class="text-right"><?=$car->body->width . ' mm';?></td>
            </tr>
            <tr>
                <td>Length</td>
                <td class="text-right"><?=$car->body->length . ' mm';?></td>
            </tr>
            <tr>
                <td>Wheelbase</td>
                <td class="text-right"><?=$car->body->wheelbase . ' mm'?></td>
            </tr>
            <tr>
                <td>Drag coefficient</td>
                <td class="text-right"><?=$car->body->drag;?></td>
            </tr>
            <tr>
                <td>Weight</td>
                <td class="text-right"><?=$car->body->weight . ' kg';?></td>
            </tr>
            </tbody>
        </table>
        <?php if(!Yii::$app->user->isGuest):?>
            <a href="<?='/body/update/' . $car->body->id;?>" class="btn btn-update">Update Body</a>
        <?php endif;?>
    </div>
    <div class="col-lg-6 table-item">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Params</th>
                <th class="text-right">Engine</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Type</td>
                <td class="text-right"><?=$car->engine->name;?></td>
            </tr>
            <tr>
                <td>Number of Cylinders</td>
                <td class="text-right"><?=$car->engine->num_cylinders;?></td>
            </tr>
            <tr>
                <td>Displacement</td>
                <td class="text-right"><?=$car->engine->displacment . ' cm3';?></td>
            </tr>
            <tr>
                <td>Rmp</td>
                <td class="text-right"><?=$car->engine->rmp . ' 1/min'?></td>
            </tr>
            <tr>
                <td>Torque</td>
                <td class="text-right"><?=$car->engine->torque . ' Nm'?></td>
            </tr>
            <tr>
                <td>Comprssion</td>
                <td class="text-right"><?=$car->engine->compression . ':1'?></td>
            </tr>
            </tbody>
        </table>
        <?php if(!Yii::$app->user->isGuest):?>
            <a href="<?='/car/select-engine/' . $car->id;?>" class="btn btn-update">Update Engine</a>
        <?php endif;?>
    </div>
    <div class="col-lg-6 table-item">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Params</th>
                <th class="text-right">Performance</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Speed</td>
                <td class="text-right"><?=$car->performance->speed . 'km/h';?></td>
            </tr>
            <tr>
                <td>Acceleration</td>
                <td class="text-right"><?=$car->performance->acceleration . ' s';?></td>
            </tr>
            </tbody>
        </table>
        <?php if(!Yii::$app->user->isGuest):?>
            <a href="<?='/performance/update/' . $car->performance->id;?>" class="btn btn-update">Update Performance</a>
        <?php endif;?>
    </div>
    <div class="col-lg-6 table-item">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Params</th>
                <th class="text-right">Transmission</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Name</td>
                <td class="text-right"><?=$car->transmission->name;?></td>
            </tr>
            <tr>
                <td>Level</td>
                <td class="text-right"><?=$car->transmission->level . '-speed';?></td>
            </tr>
            </tbody>
        </table>
        <?php if(!Yii::$app->user->isGuest):?>
            <a href="<?='/car/select-transmission/' . $car->id;?>" class="btn btn-update">Update Transmission</a>
        <?php endif;?>
    </div>
    <div class="col-lg-6 table-item">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Params</th>
                <th class="text-right">Fuel</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Urban</td>
                <td class="text-right"><?=$car->fuel->urban;?></td>
            </tr>
            <tr>
                <td>Extra urban</td>
                <td class="text-right"><?=$car->fuel->extra_urban;?></td>
            </tr>
            <tr>
                <td>Combined</td>
                <td class="text-right"><?=$car->fuel->combined;?></td>
            </tr>
            <tr>
                <td>Emission</td>
                <td class="text-right"><?=$car->fuel->emission;?></td>
            </tr>
            </tbody>
        </table>
        <?php if(!Yii::$app->user->isGuest):?>
            <a href="<?='/fuel/update/' . $car->fuel->id;?>" class="btn btn-update">Update Fuel</a>
        <?php endif;?>
    </div>
</div>
