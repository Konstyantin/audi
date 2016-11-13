<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 13.11.16
 * Time: 9:00
 */

namespace app\models\service;

use yii\base\Model;

/**
 * Class UpdateService
 * @package app\models\service
 */
class UpdateService extends Model
{
    /** @var int| $content set the content for service */
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
     * Update data about Service
     * Get data from database and change to data from form UpdateService
     *
     * @param $item
     * @param $values
     * @return mixed
     */
    public function update($item,$values)
    {
        $service = $item;
        $service->updateAttributes($values);
        $service->update();
        return $service;
    }
}