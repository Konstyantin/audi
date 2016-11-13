<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 13.11.16
 * Time: 9:00
 */

namespace app\models\service;

use app\models\base\BaseRecord;

/**
 * Class Service
 * @package app\models\service
 */
class Service extends BaseRecord
{
    const SCENARIO_SERVICE = 'service';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_SERVICE] = ['title','content'];
        return $scenarios;
    }

    /**
     * Set using tableName
     *
     * @return string
     */
    public static function tableName()
    {
        return 'service';
    }
}