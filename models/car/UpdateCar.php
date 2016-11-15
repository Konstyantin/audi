<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 15.11.16
 * Time: 17:16
 */

namespace app\models\car;

use yii\base\Model;

/**
 * Class UpdateCar
 * @package app\models\car
 */
class UpdateCar extends Model
{
    /** @var int| $name contains name car */
    public $name;
    /** @var int| $price contains price car */
    public $price;
    /** @var int| $model_id contains car */
    public $model_id;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name','price','model_id'],'required']
        ];
    }

    /**
     * Update data about Car
     * Get data from database and change to data from form UpdateCar *
     *
     * @param $item
     * @param $values
     * @return mixed
     */
    public function update($item,$values)
    {
        $car = $item;
        $car->updateAttributes($values);
        $car->update();
        return $car;
    }
}