<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 23.10.16
 * Time: 20:11
 */
namespace app\models\transmission;

use app\models\base\BaseRecord;

/**
 * Class Transmission
 * @package app\models\transmission
 */
class Transmission extends BaseRecord
{
    const SCENARIO_TRANSMISSION = 'transmission';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_TRANSMISSION] = ['name','level','description'];
        return $scenarios;
    }

    /**
     * Set using tableName
     *
     * @return string
     */
    public static function tableName()
    {
        return 'transmission';
    }

    /**
     * Set join table Transmission and Car
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCar()
    {
        return $this->hasMany(Car::className(),['transmission_id' => 'id']);
    }
}