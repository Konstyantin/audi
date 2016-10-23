<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 23.10.16
 * Time: 23:30
 */

namespace tests\models;

use app\models\engine\UpdateEngine;
use app\models\base\BaseRecord;
use Codeception\Test\Unit;

class UpdateEngineTest extends Unit
{
    public function testUpdate()
    {
        $model = new UpdateEngine();

        $value = [
            'type'=>'TDI',
            'num_cylinders' => 6,
            'displacment' => 200,
            'power' => 400,
            'rmp' => 3,
            'torque' => 123,
            'compression' => 16,
            'description' => 'test asd',
        ];
        BaseRecord::setTable('engine');
        $engine = BaseRecord::getOne(['id' => 19]);

        $model->update($engine,$value);
        expect($engine->type)->equals('TDI');
    }
}
