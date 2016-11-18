<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.11.16
 * Time: 21:52
 */

namespace app\models\performance;

use yii\base\Model;

class UpdatePerformance extends Model
{
    /** @var int| $speed contains car speed */
    public $speed;
    /** @var int| $acceleration contains car acceleration */
    public $acceleration;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['speed','acceleration'],'required'],
            [['speed'],'number','min' => 150,'max' => 350],
            [['acceleration'],'number','min' => 1,'max' => 20]
        ];
    }

    /**
     * Update data about Performance
     * Get data from database and change to data from form UpdateEngine *
     *
     * @param $item
     * @param $values
     * @return mixed
     */
    public function update($item,$values)
    {
        $performance = $item;
        $performance->updateAttributes($values);
        $performance->update();
        return $performance;
    }
}