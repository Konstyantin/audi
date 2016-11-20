<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 12.11.16
 * Time: 14:07
 */

namespace app\models\service;

use app\models\base\BaseRecord;

/**
 * Class Inspection
 * @package app\models\service
 */
class Inspection extends BaseRecord
{
    const SCENARIO_INSPECTION = 'inspection';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_INSPECTION] = ['first_name','last_name','phone','email','dealer','car','mileage','license_plate','date'];
        return $scenarios;
    }

    /**
     * Set using tableName
     *
     * @return string
     */
    public static function tableName()
    {
        return 'inspection';
    }
}