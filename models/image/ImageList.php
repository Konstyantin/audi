<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 26.10.16
 * Time: 14:07
 */

namespace app\models\image;

use Yii;
use yii\base\Model;
use app\models\image\ImageModel;

/**
 * Class ImageList provide form for search and load exists image
 * @package app\models\image
 */
class ImageList extends Model
{
    /** @var string| $path set path from search and load exists image */
    public $path;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['path','required']
        ];
    }

    /**
     * Check send request
     *
     * @return bool
     */
    public function checkRequest()
    {
        if (Yii::$app->request->post()) {
            return true;
        }
        return false;
    }

    /**
     * Check if transferred $path and check send request
     * if condition are met return send $path which are path to directory
     * where contain searched files
     *
     * @param $path
     * @return array|bool|mixed
     */
    public function getDataRequest($path)
    {
        if ($path and $this->checkRequest()) {
            return $path = Yii::$app->request->post($path);
        }
        return false;
    }

    /**
     * Check if transferred $path and check send request
     * if condition are met return found files by pass $path
     *
     * @param $path
     * @return array|bool
     */
    public function loadImage($path)
    {
        if ($this->checkRequest()) {
            return $listImage = ImageModel::load($path);
        }
        return false;
    }
}