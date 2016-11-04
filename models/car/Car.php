<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 14:57
 */
namespace app\models\car;

use app\models\base\BaseRecord;

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
}