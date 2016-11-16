<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 16.11.16
 * Time: 14:36
 */

namespace app\models\testCar;

use yii\base\Model;

/**
 * Class CreateTestCar
 * @package app\models\testCar
 */
class CreateTestCar extends Model
{
    /** @var int| $name contains test car */
    public $name;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
        ];
    }

    /**
     * Create new test car and add it in database
     * take array data from form CreateTestCar
     * 
     * @param $values
     */
    public function create($values)
    {
        $testCar = new TestCar(['scenario' => TestCar::SCENARIO_TEST_CAR]);
        $testCar->attributes = $values;
        $testCar->save();
    }
}