<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 20.11.16
 * Time: 10:45
 */

namespace tests\models;

use app\models\base\BaseRecord;
use app\models\car\CreateCar;
use app\models\car\UpdateCar;
use Codeception\Test\Unit;

class CarTest extends Unit
{
    public function testCreate()
    {
        $model = new CreateCar();
        $values = [
            'name' => 'test_car',
            'engine_id' => '1',
            'transmission_id' => '1',
            'performance_id' => '45',
            'fuel_id' => '26',
            'body_id' => '48',
            'price' => '1000',
            'model_id' => '1',
        ];

        $model->create($values);

        expect_that($car = BaseRecord::getOne('car',['name' => 'test_car']));
        expect($car->name)->equals('test_car');
    }

    public function testUpdate()
    {
        $model = new UpdateCar();
        $values = [
            'name' => 'test_car_update',
            'engine_id' => '1',
            'transmission_id' => '1',
            'performance_id' => '45',
            'fuel_id' => '26',
            'body_id' => '48',
            'price' => '1000',
            'model_id' => '1',
        ];

        $car = BaseRecord::getOne('car',['name' => 'test_car']);
        $model->update($car,$values);

        expect_that($car = BaseRecord::getOne('car',['name' => 'test_car_update']));
        expect($car->name)->equals('test_car_update');
    }

    public function testDelete()
    {
        expect(BaseRecord::remove('car',['name' => 'test_car_update']));
    }
}