<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 23.10.16
 * Time: 21:56
 */
?>
<div class="container transmission">
    <div class="col-lg-6 item">
        <img src="/img/transmission/A1610481_large.jpg" alt="">
    </div>
    <div class="col-lg-6">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Transmission</th>
                <th class="text-right"><?= $transmission->line;?></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Transmission Levels</td>
                <td class="text-right"><?= $transmission->level;?></td>
            </tr>
        </table>
        <div class="description">
            <h2 class="text-center">Description</h2>
            <p><?= $transmission->description;?></p>
        </div>
    </div>
</div>
