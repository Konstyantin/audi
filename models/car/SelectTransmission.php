<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 09.11.16
 * Time: 14:13
 */

namespace app\models\car;

use yii\base\Model;

class SelectTransmission extends Model
{
    /** @var int| $engine_id contains engine_id car */
    public $transmission_id;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['transmission_id'],'required']
        ];
    }

    /**
     * Update engine for item car
     * Get data from database and change to data from form UpdateEngine *
     *
     * @param $item
     * @return mixed
     */
    public function update($item)
    {
        $car = $item;
        $car->transmission_id = $this->transmission_id;
        $car->update();
        return $car;
    }
}