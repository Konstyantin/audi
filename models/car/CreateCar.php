<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 14:59
 */

namespace app\models\car;

use yii\base\Model;

class CreateCar extends Model
{
    public $name;
    public $engine_id;
    public $transmission_id;
    public $performance_id;
    public $fuel_id;
    public $body_id;
    public $price;
    public $model_id;

    public function rules()
    {
        return [
            [['name','engine_id','transmission_id','performance_id','fuel_id','body_id','price','model_id'],'required']
        ];
    }

    /**
     * Create new Engine and add it in database
     * take array data from form CreateEngine
     *
     * @param $values
     */
    public function create($values)
    {
        $car = new Car(['scenario' => Car::SCENARIO_CAR]);
        $car->attributes = $values;
        $car->save();
    }
    
}