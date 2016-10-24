<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 21:40
 */

namespace app\models\carModel;

use yii\base\Model;
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
            ['name','required']
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