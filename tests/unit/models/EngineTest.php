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
use app\models\engine\UpdateEngine;
use Codeception\Test\Unit;

class EngineTest extends Unit
{
    public function testCreate()
    {
        $model = new CreateEngine();
        $value = [
            'name'=>'TDI',
            'num_cylinders' => 6,
            'displacment' => 200,
            'power' => 400,
            'rmp' => 3,
            'torque' => 123,
            'compression' => 16,
            'description' => 'test delete',
        ];

        $model->create($value);

        expect_that($engine = BaseRecord::getOne('engine',['description' => 'test delete']));
        expect($engine->description)->equals('test delete');
    }
    
    public function testUpdate()
    {
        $model = new UpdateEngine();
        $value = [
            'name'=>'TDI',
            'num_cylinders' => 6,
            'displacment' => 200,
            'power' => 400,
            'rmp' => 3,
            'torque' => 123,
            'compression' => 16,
            'description' => 'test last delete',
        ];
        
        $lastEngine = BaseRecord::getOne('engine',['description' => 'test delete']);
        
        $model->update($lastEngine,$value);
        expect_that($engine = BaseRecord::getOne('engine',['description' => 'test last delete']));
        expect($engine->description)->equals('test last delete');
        
    }
    
    public function testDelete()
    {
        expect(BaseRecord::remove('engine',['description' => 'test last delete']));
    }
}
