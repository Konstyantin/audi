<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 14:59
 */

namespace app\models\car;

use yii\base\Model;
use app\models\car\Car;
use app\models\directories\Directories;

/**
 * Class CreateCar
 * @package app\models\car
 */
class CreateCar extends Model
{
    /** @var int| $name contains name car */
    public $name;
    /** @var int| $engine_id contains engine_id car */
    public $engine_id;
    /** @var int| $transmission_id contains transmission_id car */
    public $transmission_id;
    /** @var int| $performance_id contains performance_id car */
    public $performance_id;
    /** @var int| $fuel_id contains fuel_id car */
    public $fuel_id;
    /** @var int| $body_id contains body car */
    public $body_id;
    /** @var int| $price contains price car */
    public $price;
    /** @var int| $model_id contains model_id car */
    public $model_id;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name','engine_id','transmission_id','performance_id','fuel_id','body_id','price','model_id'],'required'],
            [['name'],'string','length' => [2,45]]
        ];
    }

    /**
     * get path to directory which hold all article directory and perform
     * concatenate with title car which will be create before passes
     * param $dirName to method Directories::createDirectory for create new directory
     * with passed name
     */
    public function createDir()
    {
        $dirName = Car::$path . $this->name;
        Directories::createDirectory($dirName);
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
        $this->createDir();
    }

    /**
     * Select model to choose from array models
     * and check send request from select model
     * after execute create new record
     *
     * @param $models
     * @return mixed
     */
    public function selectModel($models)
    {
        if(is_array($models)){
            foreach ($models as $modelItem){
                if(BaseRequest::checkModelRequest($modelItem)){
                    return $modelItem;
                }
            }
        }

        return $models;
    }
    
}