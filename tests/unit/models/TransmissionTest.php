<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 23.10.16
 * Time: 22:37
 */

namespace tests\models;

use app\models\transmission\CreateTransmission;
use app\models\transmission\UpdateTransmission;
use app\models\base\BaseRecord;
use Codeception\Test\Unit;

class CreateTransmissionTest extends Unit
{
    public function testCreate()
    {
        $model = new CreateTransmission();
        $value = [
            'name'=>'S-tronic',
            'level' => '6',
            'description' => 'test delete',
        ];
        BaseRecord::setTable('transmission');
        $model->create($value);
        
        expect_that($transmission = BaseRecord::getOne('transmission',['description' => 'test delete']));
        expect($transmission->description)->equals('test delete');
    }
    public function testUpdate()
    {
        $model = new UpdateTransmission();
        $value = [
            'name'=>'S-tronic',
            'level' => '6',
            'description' => 'test delete last',
        ];

        $lastTransmission = BaseRecord::getOne('transmission',['description' => 'test delete']);

        $model->update($lastTransmission,$value);
        expect_that($transmission = BaseRecord::getOne('transmission',['description' => 'test delete last']));
        expect($transmission->description)->equals('test delete last');

    }

    public function testDelete()
    {
        expect(BaseRecord::remove('transmission',['description' => 'test delete last']));
    }
}
