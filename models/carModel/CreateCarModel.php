<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 21:40
 */

namespace app\models\carModel;

use yii\base\Model;

/**
 * Class CreateCarModel is the model which set rules for build CreateCarModel and validation from input data
 * @package app\models\carModel
 */
class CreateCarModel extends Model
{
    /** @var int| $name contains name model */
    public $name;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['name','required'],
            [['name'],'string','min' => 2, 'max' => 15]
        ];
    }

    /**
     * Create new Model and add it in database
     * take array data from form CreateCarModel
     *
     * @param $values
     */
    public function create($values)
    {
        $model = new CarModel(['scenario' => CarModel::SCENARIO_MODEL]);
        $model->attributes = $values;
        $model->save();
    }
}