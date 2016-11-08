<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 28.10.16
 * Time: 23:24
 */

namespace app\models\image;

use app\models\image\ImageModel;
use yii\base\Widget;
use yii\helpers\Html;

class LoadWidget extends Widget
{
    public $imgs;
    public $items;
    public $controller;
    public $level;
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        foreach ($this->imgs as $imgItem){
            $img = ImageModel::multiexplode(['.','/'],$imgItem);
            $img = $img[$this->level];
            foreach ($this->items as $item){
                if(ImageModel::checkMatch($item->name,$img)){
                    echo '<div class="col-md-4 col-xs-6 item">
                                <img src="/' .  $imgItem. '" alt="">
                                <h2 class="text-center">
                                    <a href="/'.$this->controller . '/' . $item->id . '">' . $item->name . '</a>
                                </h2>
                                   <a href="/' . $this->controller . '/update/' . $item->id . '" class="btn pull-left btn-update">Update</a>
                                   <a href="/'.$this->controller . '/delete/' . $item->id . '" class="btn pull-right btn-delete">Delete</a>
                           </div>';
                }
            }
        }
    }
}