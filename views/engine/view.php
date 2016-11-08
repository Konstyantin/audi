<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 22.10.16
 * Time: 8:50
 */
?>
<div class="container engine">
    <div class="col-lg-6 item">
        <img src="/img/engine/A161508_medium.jpg" alt="">
    </div>
    <div class="col-lg-6">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Engine</th>
                    <th class="text-right"><?= $engine->type;?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Number of cylinders</td>
                    <td class="text-right"><?= $engine->num_cylinders;?></td>
                </tr>
                <tr>
                    <td>Displacement</td>
                    <td class="text-right"><?= $engine->displacment;?></td>
                </tr>
                <tr>
                    <td>Power</td>
                    <td class="text-right"><?= $engine->power . ' kW';?></td>
                </tr>
                <tr>
                    <td>Rmp</td>
                    <td class="text-right"><?= $engine->rmp . ' at';?></td>
                </tr>
                <tr>
                    <td>Torque</td>
                    <td class="text-right"><?= $engine->torque . ' Nm';?></td>
                </tr>
                <tr>
                    <td>Compression</td>
                    <td class="text-right"><?= $engine->compression . ':1';?></td>
                </tr>
            </tbody>
        </table>
        <div class="description">
            <h2 class="text-center">Description</h2>
            <p><?= $engine->description;?></p>
        </div>
    </div>
</div>
