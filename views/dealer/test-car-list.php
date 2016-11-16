<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 16.11.16
 * Time: 15:00
 */
?>

<div class="container">
    <h2 class="text-center">Test cars list</h2>
    <table class="table table-hover test-car-list">
        <thead>
        <tr>
            <th>Car name</th>
            <th class="text-right">Operation</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($cars as $car):?>
                <tr>
                    <td><?=$car->name;?></td>
                    <td class="text-right"><a href="/dealer/delete-test-car/<?=$car->id;?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach;?>
        </tr>
        </tbody>
    </table>
</div>
