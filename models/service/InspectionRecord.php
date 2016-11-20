<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 12.11.16
 * Time: 12:00
 */
namespace app\models\service;

use yii\base\Model;

/**
 * Class InspectionRecord
 * @package app\models\service
 */
class InspectionRecord extends Model
{
    /** @var int| $first_name contains first name user*/
    public $first_name;
    /** @var int| $last_name contains last name user */
    public $last_name;
    /** @var int| $phone contains phone user */
    public $phone;
    /** @var int| $email contains email user */
    public $email;
    /** @var int| $dealer contains dealer user */
    public $dealer;
    /** @var int| $car contains car user */
    public $car;
    /** @var int| $mileage contains mileage user */
    public $mileage;
    /** @var int| $license_plate contains license plate user */
    public $license_plate;
    /** @var int| $register_inspection contains phone user */
    public $register_inspection;



    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['first_name','last_name','phone','email','dealer','car','mileage','license_plate','date'],'required'],
            [['first_name','last_name'],'string','min' => 3,'max' => 45],
            [['phone'],'string','min' => 10,'max' => 12],
            [['email'],'email'],
        ];
    }

    /**
     * Create new Inspection Record and add it in database
     * take array data from form InspectionRecord
     *
     * @param $values
     */
    public function create($values)
    {
        $inspection = new Inspection(['scenario' => Inspection::SCENARIO_INSPECTION]);
        $inspection->attributes = $values;
        $inspection->save();
    }
}