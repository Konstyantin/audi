<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 23.10.16
 * Time: 20:31
 */

namespace app\models\transmission;

use yii\base\Model;

/**
 * Class UpdateTransmission is the model which set rules for build UpdateTransmission and Update data item
 * @package app\models\transmission
 */
class UpdateTransmission extends Model
{
    /** @var int| $type contains line transmission */
    public $name;
    /** @var int| $type contains level transmission */
    public $level;
    /** @var int| $type contains description transmission */
    public $description;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name','level','description'],'required'],
            [['name'],'string'],
            [['level'],'number','max' => 9]
        ];
    }

    /**
     * Update data about Transmission
     * Get data from database and change to data from form UpdateTransmission
     *
     * @param $item
     * @param $values
     * @return mixed
     */
    public function update($item,$values)
    {
        $transmission = $item;
        $transmission->updateAttributes($values);
        $transmission->update();
        return $transmission;
    }
}