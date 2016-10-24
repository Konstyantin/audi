<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 12:21
 */

namespace app\models\model;

use yii\base\Model;

class UpdateModel extends Model
{
    /** @var varchar| $name set name model */
    public $name;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['name', 'required'],
        ];
    }

    /**
     * Update data about Model
     * Get data from database and change to data from form UpdateModel
     *
     * @param $item
     * @param $values
     * @return mixed
     */
    public function update($item,$values)
    {
        $model = $item;
        $model->updateAttributes($values);
        $model->update();
        return $model;
    }
}