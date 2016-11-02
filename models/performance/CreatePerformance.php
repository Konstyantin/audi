<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 13:40
 */
namespace app\models\performance;

use yii\base\Model;

class CreatePerformance extends Model
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
            [['speed','acceleration'],'required']
        ];
    }

    /**
     * Create new Performance and add it in database
     * take array data from form CreatePerformance
     *
     * @param $values
     */
    public function create($values)
    {
        $performance = new Performance(['scenario' => Performance::SCENARIO_PERFORMANCE]);
        $performance->attributes = $values;
        $performance->save();
    }
}