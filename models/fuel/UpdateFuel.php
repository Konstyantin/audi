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
            [['urban','extra_urban','combined','emission'],'required'],
            [['urban','extra_urban','combined'],'number','min' => 5, 'max' => 30],
            [['emission'],'string','min' => 5,'max' => 10]
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