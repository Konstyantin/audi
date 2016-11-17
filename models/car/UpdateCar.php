<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 15.11.16
 * Time: 17:16
 */

namespace app\models\car;

use yii\base\Model;
use app\models\car\Car;
use app\models\base\BaseRecord;
use app\models\directories\Directories;

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
     * Get item name before update select item
     *
     * @param $item
     * @return mixed
     */
    public function getItemName($item)
    {
        return $item->name;
    }

    /**
     * Execute rename exists directory which refers to select item  
     *
     * @param $item
     */
    public function renameDir($item)
    {
        $oldDir = Car::$path . $item;
        $newDir = Car::$path . $this->name;

        Directories::renameDir($oldDir,$newDir);
    }

    /**
     * Update data about Car
     * Get data from database and change to data from form UpdateCar *
     *
     * @param $car
     * @param $values
     * @return mixed
     */
    public function update($car,$values)
    {
        $item = $this->getItemName($car);
        $car->updateAttributes($values);
        $car->update();
        $this->renameDir($item);
        return $car;
    }
}