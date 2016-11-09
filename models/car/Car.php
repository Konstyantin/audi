<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 14:57
 */
namespace app\models\car;

use Yii;
use app\models\body\Body;
use app\models\fuel\Fuel;
use app\models\engine\Engine;
use app\models\base\BaseRecord;
use app\models\performance\Performance;
use app\models\transmission\Transmission;
/**
 * Class Car
 * @package app\models\car
 */
class Car extends BaseRecord
{
    const SCENARIO_CAR = 'car';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_CAR] = ['name','engine_id','transmission_id','performance_id','fuel_id','body_id','price','model_id'];
        return $scenarios;
    }

    /**
     * Set using tableName
     *
     * @return string
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * Set join table Car and Fuel
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFuel()
    {
        return $this->hasOne(Fuel::className(),['id' => 'fuel_id']);
    }

    /**
     * Set join table Car and Performance
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEngine()
    {
        return $this->hasOne(Engine::className(),['id' => 'engine_id']);
    }

    /**
     * Set join table Car and Performance
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerformance()
    {
        return $this->hasOne(Performance::className(),['id' => 'performance_id']);
    }

    /**
     * Set join table Car and Transmission
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransmission()
    {
        return $this->hasOne(Transmission::className(),['id' => 'transmission_id']);
    }

    /**
     * Set join table Car and Body
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBody()
    {
        return $this->hasOne(Body::className(),['id' => 'body_id']);
    }

    /**
     * Retrieve car name from request query 
     *
     * @param $name
     * @return bool|mixed
     */
    public static function carName($name)
    {
        if (strpos($name,'_') !== false) {
            return $carName = str_replace('_',' ',$name);
        }

        return false;
    }


    /**
     * Get data about car by $param
     * 
     * @param $param
     * @return static
     */
    public static function getData($param)
    {
        return self::findOne($param);
    }

    /**
     * Get Car param
     *
     * @param $car
     * @return array
     */
    public static function getCarParam($car)
    {
        $fuel_id = $car->fuel_id;
        $body_id = $car->body_id;
        $performance_id = $car->performance_id;

        return [
            'fuel' => $fuel_id,
            'body' => $body_id,
            'performance' => $performance_id
        ];
    }
}