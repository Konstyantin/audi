<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 16.11.16
 * Time: 14:35
 */
namespace app\models\testCar;

use app\models\base\BaseRecord;

/**
 * Class TestCar
 * @package app\models\testCar
 */
class TestCar extends BaseRecord
{
    const SCENARIO_TEST_CAR = 'test_car';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
{
    $scenarios = parent::scenarios();
    $scenarios[self::SCENARIO_TEST_CAR] = ['name'];
    return $scenarios;
}

    /**
     * Set using tableName
     *
     * @return string
     */
    public static function tableName()
{
    return 'test_car';
}
}