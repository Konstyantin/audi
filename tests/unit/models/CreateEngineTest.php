<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 23.10.16
 * Time: 23:25
 */

namespace tests\models;

use app\models\engine\CreateEngine;
use app\models\base\BaseRecord;
use Codeception\Test\Unit;

class CreateEngineTest extends Unit
{
    public function testCreate()
    {
        $model = new CreateEngine();
        $value = [
            'type'=>'TDI',
            'num_cylinders' => 6,
            'displacment' => 200,
            'power' => 400,
            'rmp' => 3,
            'torque' => 123,
            'compression' => 16,
            'description' => 'test description',
        ];
        BaseRecord::setTable('engine');
        $model->create($value);

        expect_that($engine = BaseRecord::getOne(['description' => 'test description']));
        expect($engine->description)->equals('test description');
    }
}
