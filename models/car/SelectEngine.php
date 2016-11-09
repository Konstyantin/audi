<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.11.16
 * Time: 23:21
 */

namespace app\models\car;

use yii\base\Model;

/**
 * Class SelectEngine
 * @package app\models\car
 */
class SelectEngine extends Model
{
    /** @var int| $engine_id contains engine_id car */
    public $engine_id;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['engine_id'],'required']
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
        $car->engine_id = $this->engine_id;
        $car->update();
        return $car;
    }
}