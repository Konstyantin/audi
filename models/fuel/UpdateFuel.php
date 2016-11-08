<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.11.16
 * Time: 22:30
 */

namespace app\models\fuel;

use yii\base\Model;

class UpdateFuel extends Model
{
    /** @var int| $urban contains urban car */
    public $urban;
    /** @var int| $extra_urban contains extra_urban car */
    public $extra_urban;
    /** @var int| $combined contains combined car */
    public $combined;
    /** @var int| $emission contains emission car */
    public $emission;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['urban','extra_urban','combined','emission'],'required']
        ];
    }

    /**
     * Update data about Fuel
     * Get data from database and change to data from form UpdateEngine *
     *
     * @param $item
     * @param $values
     * @return mixed
     */
    public function update($item,$values)
    {
        $fuel = $item;
        $fuel->updateAttributes($values);
        $fuel->update();
        return $fuel;
    }
}