<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 21:38
 */
namespace app\models\carModel;

use app\models\base\BaseRecord;

class CarModel extends BaseRecord
{
    const SCENARIO_MODEL = 'models';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_MODEL] = ['name'];
        return $scenarios;
    }

    /**
     * Set using tableName
     *
     * @return string
     */
    public static function tableName()
    {
        return 'models';
    }
}