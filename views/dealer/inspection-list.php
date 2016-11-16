<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 16.11.16
 * Time: 20:11
 */
?>
<h2 class="text-center">Test drive list</h2>
<table class="table table-hover">
    <thead>
    <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Car</th>
        <th>Mileage</th>
        <th>License plate</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($list as $item):?>
        <tr>
            <td><?=$item->first_name?></td>
            <td><?=$item->last_name?></td>
            <td><?=$item->phone?></td>
            <td><?=$item->email?></td>
            <td><?=$item->car?></td>
            <td><?=$item->mileage?></td>
            <td><?=$item->license_plate?></td>
            <td><?=$item->date?></td>
            <td><a href="/dealer/delete-test/<?=$item->id?>" class="btn btn-danger">Delete</a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

