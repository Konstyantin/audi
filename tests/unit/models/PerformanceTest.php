<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 20.11.16
 * Time: 20:44
 */

namespace tests\models;

use app\models\base\BaseRecord;
use app\models\performance\CreatePerformance;
use app\models\performance\UpdatePerformance;
use Codeception\Test\Unit;

class PerformanceTest extends Unit
{
    public function testCreate()
    {
        $model = new CreatePerformance();
        $value = [
            'speed' => 222,
            'acceleration' => 2,
        ];
        
        $model->create($value);
        
        expect_that($performance = BaseRecord::getOne('performance',['speed' => 222]));
        expect($performance->speed)->equals(222);
    }

    public function testUpdate()
    {
        $model = new UpdatePerformance();
        $value = [
            'speed' => 300,
            'acceleration' => 2,
        ];

        $performance = BaseRecord::getOne('performance',['speed' => 222]);

        $model->update($performance,$value);

        expect_that($updatePerformance = BaseRecord::getOne('performance',['speed' => 300]));
        expect($updatePerformance->speed)->equals(300);
    }
    
    public function testDelete()
    {
        expect(BaseRecord::remove('performance',['speed' => 300]));
    }
}