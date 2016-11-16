<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 15.11.16
 * Time: 23:09
 */
namespace app\models\dealer;

use app\models\base\BaseRecord;

/**
 * Class Dealer
 * @package app\models\dealer
 */
class Dealer extends BaseRecord
{
    const SCENARIO_DEALER = 'dealer';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_DEALER] = ['city','street','location','description'];
        return $scenarios;
    }

    /**
     * Set using tableName
     *
     * @return string
     */
    public static function tableName()
    {
        return 'dealer';
    }
}