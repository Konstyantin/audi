<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 14:30
 */

namespace app\models\fuel;

use yii\base\Model;

/**
 * Class CreateFuel is the model which set rules for build CreateFuel and validation from input data
 * @package app\models\fuel
 */
class CreateFuel extends Model
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
            [['urban','extra_urban','combined'],'number','min' => 2, 'max' => 30],
            [['emission'],'string','length' => [4,10]]
        ];
    }

    /**
     * Create new Fuel and add it in database
     * take array data from form CreateFuel
     *
     * @param $values
     */
    public function create($values)
    {
        $fuel = new Fuel(['scenario' => Fuel::SCENARIO_FUEL]);
        $fuel->attributes = $values;
        $fuel->save();
    }
}