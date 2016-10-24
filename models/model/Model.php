<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 11:29
 */
namespace app\models\model;

use app\models\base\BaseRecord;

/**
 * Class Model
 * @package app\models\model
 */
class Model extends BaseRecord
{
    const SCENARIO_MODELS = 'models';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_MODELS] = ['name'];
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