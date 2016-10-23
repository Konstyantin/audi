<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 23.10.16
 * Time: 22:37
 */

namespace tests\models;

use app\models\transmission\CreateTransmission;
use app\models\base\BaseRecord;
use Codeception\Test\Unit;

class CreateTransmissionTest extends Unit
{
    public function testCreate()
    {
        $model = new CreateTransmission();
        $value = [
            'line'=>'S-tronic',
            'level' => '6',
            'description' => 'test description',
        ];
        BaseRecord::setTable('transmission');
        $model->create($value);
        
        expect_that($transmission = BaseRecord::getOne(['description' => 'test description']));
        expect($transmission->description)->equals('test description');
    }
}
