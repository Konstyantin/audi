<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 14:29
 */
namespace app\models\fuel;

use app\models\base\BaseRecord;

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

}