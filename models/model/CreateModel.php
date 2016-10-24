<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 11:32
 */

namespace app\models\model;

use app\models\model\Model;

/**
 * Class CreateModel is the model which set rules for build CreateModel and validation from input data
 * @package app\models\model
 */
class CreateModel extends Model
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
     * Create new Model and add it in database
     * take array data from form CreateModel
     *
     * @param $values
     */
    public function create($values)
    {
        $model = new Model(['scenario' => Model::SCENARIO_MODELS]);
        $model->attributes = $values;
        $model->save();
    }
}