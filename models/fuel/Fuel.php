<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 14:29
 */
namespace app\models\fuel;

use app\models\base\BaseRecord;
use app\models\car\Car;

/**
 * Class Fuel
 * @package app\models\fuel
 */
class Fuel extends BaseRecord
{
    const SCENARIO_FUEL = 'fuel';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_FUEL] = ['urban','extra_urban','combined','emission'];
        return $scenarios;
    }

    /**
     * Set using tableName
     *
     * @return string
     */
    public static function tableName()
    {
        return 'fuel';
    }

    public function getCar()
    {
        return $this->hasMany(Car::className(),['fuel_id' => 'id']);
    }
}