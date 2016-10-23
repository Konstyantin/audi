<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 23.10.16
 * Time: 20:47
 */
?>
<div class="transmission-header">
    <div>
        <img class="engine-img" src="/img/transmission/A168578_medium.jpg" alt="">
        <p>Audi Transsmisiion</p>
    </div>
</div>
<div class="container transmission">
    <?php if(Yii::$app->session->hasFlash('delete_transmission')):?>
        <?php
        $success = Yii::$app->session->getFlash('delete_transmission');
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'alert-success'
            ],
            'body' => $success
        ]);
        ?>
    <?php endif;?>

    <div class="transmission-manage">
        <a href="/transmission/create" class="btn btn-default">Create Transmission</a>
        <a href="/transmission/delete-list" class="btn btn-default">Delete All</a>
        <hr>
    </div>

<?php foreach ($list as $item):?>
    <div class="col-lg-3 col-xs-6 item">
        <img src="/img/transmission/A1610481_large.jpg" alt="">
        <h2 class="text-center"><a href="<?= '/transmission/' . $item->id; ?>"><?= $item->line;?></a></h2>
        <div class="col-lg-4 pull-left btn-update">
            <a href="<?= '/transmission/update/' . $item->id; ?>" class="btn btn-default">Update</a>
        </div>
        <div class="col-lg-4 pull-right">
            <a href="<?= '/transmission/delete/' . $item->id; ?>" class="btn btn-default">Delete</a>
        </div>
    </div>
<?php endforeach;?>
</div>