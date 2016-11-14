<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 15.11.16
 * Time: 0:19
 */
namespace app\models\technology;

use app\models\base\BaseRecord;

class Technology extends BaseRecord
{
    const SCENARIO_TECHNOLOGY = 'technology';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_TECHNOLOGY] = ['title','content'];
        return $scenarios;
    }

    /**
     * Set using tableName
     *
     * @return string
     */
    public static function tableName()
    {
        return 'technology';
    }
}