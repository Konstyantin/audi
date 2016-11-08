<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 13:47
 */

namespace app\models\performance;

use app\models\base\BaseRecord;
use app\models\car\Car;

/**
 * Class Performance
 * @package app\models\performance
 */
class Performance extends BaseRecord
{
    const SCENARIO_PERFORMANCE = 'performance';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_PERFORMANCE] = ['speed','acceleration'];
        return $scenarios;
    }

    /**
     * Set using tableName
     *
     * @return string
     */
    public static function tableName()
    {
        return 'performance';
    }

    /**
     * Set join table Performance and Car
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCar()
    {
        return $this->hasMany(Car::className(),['performance_id' => 'id']);
    }
}