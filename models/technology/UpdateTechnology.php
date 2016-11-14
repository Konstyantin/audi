<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 15.11.16
 * Time: 0:22
 */

namespace app\models\technology;

use yii\base\Model;

class UpdateTechnology extends Model
{
    /** @var int| $content set the content for technology */
    public $content;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
        ];
    }

    /**
     * Update data about Technology
     * Get data from database and change to data from form UpdateTechnology
     *
     * @param $item
     * @param $values
     * @return mixed
     */
    public function update($item,$values)
    {
        $technology = $item;
        $technology->updateAttributes($values);
        $technology->update();
        return $technology;
    }
}