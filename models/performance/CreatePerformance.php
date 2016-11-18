<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 13:40
 */
namespace app\models\performance;

use yii\base\Model;

/**
 * Class CreatePerformance is the model which set rules for build CreatePerformance and validation from input data
 * @package app\models\performance
 */
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
            [['speed','acceleration'],'required'],
            [['speed'],'number','min' => 150,'max' => 350],
            [['acceleration'],'number','min' => 1,'max' => 20]
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