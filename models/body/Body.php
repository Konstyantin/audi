<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 13:28
 */

namespace app\models\body;

use app\models\base\BaseRecord;

/**
 * Class Body
 * @package app\models\body
 */
class Body extends BaseRecord
{
    const SCENARIO_BODY = 'body';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_BODY] = ['height','width','length','wheelbase','drag','weight'];
        return $scenarios;
    }

    /**
     * Set using tableName
     *
     * @return string
     */
    public static function tableName()
    {
        return 'body';
    }
}