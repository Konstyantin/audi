<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 22.10.16
 * Time: 15:54
 */

namespace app\models\engine;

use yii\base\Model;

/**
 * Class UpdateEngine
 * @package app\models\engine
 */
class UpdateEngine extends Model
{
    /** @var int| $type contains type engine */
    public $type;
    /** @var int| $num_cylinders set the number cylinders engine */
    public $num_cylinders;
    /** @var int| $displacment set displacment engine */
    public $displacment;
    /** @var int| $displacment set type engine */
    public $power;
    /** @var int| $power set power engine */
    public $rmp;
    /** @var int| $rmp set rmp engine */
    public $torque;
    /** @var int| $torque set twisting moment engine */
    public $compression;
    /** @var int| $compression set compression engine */
    public $description;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['type','num_cylinders','displacment','power','rmp','torque','compression','description'], 'required'],
        ];
    }

    /**
     * Update data about Engine
     * Get data from database and change to data from form UpdateEngine *
     *
     * @param $item
     * @param $values
     * @return mixed
     */
    public function update($item,$values)
    {
        $engine = $item;
        $engine->updateAttributes($values);
        $engine->update();
        return $engine;
    }
}