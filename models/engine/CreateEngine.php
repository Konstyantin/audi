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

class CreateEngine extends Model
{
    public $type;
    public $num_cylinders;
    public $displacment;
    public $power;
    public $description;

    public function rules()
    {
        return [
            [['type','num_cylinders','displacment','power','description'], 'required'],
        ];
    }

    public function create($values)
    {
        $engine = new Engine(['scenario' => Engine::SCENARIO_ENGINE]);
        $engine->attributes = $values;
        $engine->save();
    }
}