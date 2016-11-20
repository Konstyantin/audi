<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 20.11.16
 * Time: 20:17
 */

namespace tests\models;

use app\models\base\BaseRecord;
use app\models\fuel\CreateFuel;
use app\models\fuel\UpdateFuel;
use Codeception\Test\Unit;

class FuelTest extends Unit
{
    public function testCreate()
    {
        $model = new CreateFuel();
        $value = [
            'urban' => 29,
            'extra_urban' => 10,
            'combined' => 10,
            'emission' => 10,
        ];
        
        $model->create($value);
        
        expect_that($fuel = BaseRecord::getOne('fuel',['urban' => 29]));
        expect($fuel->urban)->equals(29);
    }


    public function testUpdate()
    {
        $model = new UpdateFuel();
        $value = [
            'urban' => 28,
            'extra_urban' => 10,
            'combined' => 10,
            'emission' => 10,
        ];

        $fuel = BaseRecord::getOne('fuel',['urban' => 29]);

        $model->update($fuel,$value);
        expect_that($fuel_update = BaseRecord::getOne('fuel',['urban' => 28]));
        expect($fuel_update->urban)->equals(28);
    }

    public function testDelete()
    {
        expect(BaseRecord::remove('fuel',['urban' => 28]));
    }
    
}