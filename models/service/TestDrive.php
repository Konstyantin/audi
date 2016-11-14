<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 13.11.16
 * Time: 15:23
 */

namespace app\models\service;

use app\models\base\BaseRecord;

class TestDrive extends BaseRecord
{
    const SCENARIO_TEST_DRIVE = 'test_drive';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_TEST_DRIVE] = ['first_name','last_name','phone','email','dealer','car','month','day','time'];
        return $scenarios;
    }

    /**
     * Set using tableName
     *
     * @return string
     */
    public static function tableName()
    {
        return 'test_drive';
    }

    /**
     * Get all information about record by pram
     * 
     * @param $param
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getAllByParam($param)
    {
        return self::find()->where($param)->all();
    }

    /**
     * Check exists test drive on month day time and for select car
     *
     * @param $model
     * @return bool
     */
    public static function checkExistTest($model)
    {
        if (self::checkByMonth($model)) {
            if (self::checkByDay($model)) {
                $cars = self::getAllCarByDay($model);
                if (self::checkOne($cars)) {
                    $car = self::getOneCar($model);
                    if(!self::checkMatchTime($model,$car)){
                        return true;
                    }
                } else {
                    if(self::getManyCar($model,$cars)){
                        return true;
                    }
                }
            }
        }
        return false;
    }

    /**
     * Check exists registered test drive on month
     *
     * @param $model
     * @return bool
     */
    public static function checkByMonth($model)
    {
        if(self::getAllByParam(['car' => $model->car,'month' => $model->month,'dealer' => $model->dealer])){
            return true;
        }
        return false;
    }

    /**
     * Check exists registered test drive on this day the dealer
     *
     * @param $model
     * @return bool
     */
    public static function checkByDay($model)
    {   
        if(self::getAllByParam(['car' => $model->car,'day' => $model->day,'dealer' => $model->dealer])){
            return true;
        }
        return false;
    }

    /**
     * Get all car registered cars on the day
     *
     * @param $model
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getAllCarByDay($model)
    {
        return self::getAllByParam(['car' => $model->car,'day' => $model->day,'dealer' => $model->dealer]);
    }

    /**
     * Check the number existing record by param
     *
     * @param $param
     * @return bool
     */
    public static function checkOne($param)
    {
        if (count($param) == 1) {
            return true;
        }
        return false;
    }

    /**
     * Get one car from list test drive record
     *
     * @param $model
     * @return static
     */
    public static function getOneCar($model)
    {
        return self::findOne(['car' => $model->car]);
    }

    /**
     * Get the time was a test drive car
     *
     * @param $car
     * @return mixed
     */
    public static function getTestTime($car)
    {
        return $car->time;
    }

    /**
     * Check getting transferred time to the time of passing the existing test
     *
     * @param $model
     * @param $car
     * @return bool
     */
    public static function checkMatchTime($model,$car)
    {
        $minTimeCar = $car->time - 2;
        $maxTimeCar = $car->time + 2;

        $modelTime = (int)$model->time;

        echo $minTimeCar . 'min' . '<br>';
        echo $maxTimeCar . 'max' . '<br>';
        echo $modelTime . 'time' . '<br>';
        echo "<hr>";

        if($modelTime <= $minTimeCar || $modelTime >= $maxTimeCar) {
            return true;
        }
        return false;
    }

    /**
     * Get all register test drive data and check each of the timing
     *
     * @param $model
     * @param $cars
     * @return bool
     */
    public static function getManyCar($model,$cars)
    {
        foreach ($cars as $car) {
            if(!self::checkMatchTime($model,$car)){
                return true;
            }
        }
    }
}