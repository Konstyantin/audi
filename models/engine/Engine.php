<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 21.10.16
 * Time: 19:47
 */
namespace app\models\engine;

use app\models\base\BaseRecord;

/**
 * Class Engine
 * @package app\models\engine
 */
class Engine extends BaseRecord
{
    const SCENARIO_ENGINE = 'engine';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_ENGINE] = ['type','num_cylinders','displacment','power','rmp','torque','compression','description'];
        return $scenarios;
    }

    /**
     * Set using tableName
     *
     * @return string
     */
    public static function tableName()
    {
        return 'engine';
    }
}