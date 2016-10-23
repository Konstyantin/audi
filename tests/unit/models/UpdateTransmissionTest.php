<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 23.10.16
 * Time: 23:10
 */

namespace tests\models;

use app\models\transmission\UpdateTransmission;
use app\models\base\BaseRecord;
use Codeception\Test\Unit;

class UpdateTransmissionTest extends Unit
{
    public function testUpdate()
    {
        $model = new UpdateTransmission();
        $value = [
            'line'=>'S-tronic',
            'level' => '6',
            'description' => 'test descriptions',
        ];
        BaseRecord::setTable('transmission');

        expect_that($transmission = BaseRecord::getOne(['description' => 'test description']));
        $model->update($transmission,$value);
        expect($transmission->description)->equals('test descriptions');
    }
}
