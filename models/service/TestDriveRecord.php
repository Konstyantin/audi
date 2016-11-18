<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 13.11.16
 * Time: 15:39
 */

namespace app\models\service;

use yii\base\Model;
use app\models\service\TestDrive;

class TestDriveRecord extends Model
{
    /** @var int| $first_name set first name user */
    public $first_name;
    /** @var int| $last_name set the last name user */
    public $last_name;
    /** @var int| $phone set phone user */
    public $phone;
    /** @var int| $email set email user */
    public $email;
    /** @var int| $dealer set dealer for test drive*/
    public $dealer;
    /** @var int| $car set car which select user */
    public $car;
    /** @var text| $month set month test drive */
    public $month;
    /** @var int| $day set day test drive */
    public $day;
    /** @var int| $time set time test drive */
    public $time;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['first_name','last_name','phone','email','dealer','car','month','day','time'],'required'],
            [['first_name','last_name'],'string','min' => 3,'max' => 45],
            [['phone'],'string','min' => 10,'max' => 12],
            [['email'],'email'],
            [['month'],'number','min' => 1, 'max' => 12],
            [['day'],'number','min' => 1, 'max' => 31],
            [['time'],'number','min' => 9, 'max' => 18],
        ];
    }

    /**
     * Check exists test drive by params
     *
     * @return bool
     */
    public function checkTest()
    {
        if(!TestDrive::checkExistTest($this)){
            return true;
        }
    }

    /**
     * Create new Record and add it in database
     * take array data from form TestDriveRecord
     *
     * @param $values
     */
    public function create($values)
    {
        $testDrive = new TestDrive(['scenario' => TestDrive::SCENARIO_TEST_DRIVE]);
        $testDrive->attributes = $values;
        $testDrive->save();
    }
}