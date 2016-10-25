<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 21:47
 */

namespace app\models\carModel;

use yii\base\Model;

/**
 * Class UpdateCarModel
 * @package app\models\carModel
 */
class UpdateCarModel extends Model
{
    /** @var char| $name contains name model */
    public $name;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['name','required'],
        ];
    }

    /**
     * Update data about Model
     * Get data from database and change to data from form UpdateCarModel
     *
     * @param $item
     * @param $values
     * @return mixed
     */
    public function update($item,$values)
    {
        $model = $item;
        $model->updateAttributes($values);
        $model->update();
        return $model;
    }
}