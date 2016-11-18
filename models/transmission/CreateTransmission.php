<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 23.10.16
 * Time: 20:13
 */

namespace app\models\transmission;

use yii\base\Model;

/**
 * Class CreateTransmission is the model which set rules for build CreateTransmission and validation from input data
 *
 * @package app\models\engine
 */
class CreateTransmission extends Model
{
    /** @var int| $type contains line transmission */
    public $name;
    /** @var int| $type contains level transmission */
    public $level;
    /** @var text| $type contains description transmission */
    public $description;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name','level','description'],'required'],
            [['name'],'string'],
            [['level'],'number','max' => 1]
        ];
    }

    /**
     * Create new Transmission and add it in database
     * take array data from form CreateTransmission
     *
     * @param $values
     */
    public function create($values)
    {
        $transmission = new Transmission(['scenario' => Transmission::SCENARIO_TRANSMISSION]);
        $transmission->attributes = $values;
        $transmission->save();
    }
}