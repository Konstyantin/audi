<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 21.10.16
 * Time: 19:47
 */
namespace app\models\engine;

use app\models\base\BaseRecord;

class Engine extends BaseRecord
{
    const SCENARIO_ENGINE = 'engine';

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_ENGINE] = ['type','num_cylinders','displacment','power','description'];
        return $scenarios;
    }

    public static function tableName()
    {
        return 'engine';
    }
}