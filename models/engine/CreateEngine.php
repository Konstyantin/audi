<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 21.10.16
 * Time: 19:49
 */

namespace app\models\engine;

use Yii;
use app\models\engine\Engine;
use yii\base\Model;

/**
 * Class CreateEngine is the model which set rules for build CreateEngineForm and validation from input data
 *
 * @package app\models\engine
 */
class CreateEngine extends Model
{
    /** @var int| $name contains type engine */
    public $name;
    /** @var int| $num_cylinders set the number cylinders engine */
    public $num_cylinders;
    /** @var int| $displacment set displacment engine */
    public $displacment;
    /** @var int| $power set type engine */
    public $power;
    /** @var int| $rmp set power engine */
    public $rmp;
    /** @var int| $torque set rmp engine */
    public $torque;
    /** @var int| $compression set twisting moment engine */
    public $compression;
    /** @var text| $description set compression engine */
    public $description;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name','num_cylinders','displacment','power','rmp','torque','compression','description'], 'required'],
            [['num_cylinders','displacment','power','rmp','torque','compression'],'number'],
            [['name'],'string','length' => [2,10]],
        ];
    }

    /**
     * Create new Engine and add it in database
     * take array data from form CreateEngine
     *
     * @param $values
     */
    public function create($values)
    {
        $engine = new Engine(['scenario' => Engine::SCENARIO_ENGINE]);
        $engine->attributes = $values;
        $engine->save();
    }
}