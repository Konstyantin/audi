<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 21:59
 */

namespace tests\models;

use Codeception\Test\Unit;
use app\models\base\BaseRecord;
use app\models\carModel\CreateCarModel;
use app\models\carModel\UpdateCarModel;

class CarModelTest extends Unit
{
    public function testCreate()
    {
        $model = new CreateCarModel();
        $value = [
            'name' => 'A10'
        ];
        
        $model->create($value);

        expect_that($model = BaseRecord::getOne('models',['name' => 'A10']));
        expect($model->name)->equals('A10');
    }
    
    public function testUpdate()
    {
        $model = new UpdateCarModel();
        $value = [
            'name' => 'A11',
        ];
        
        $updateCar = BaseRecord::getOne('models',['name' => 'A10']);
        $model->update($updateCar,$value);
        expect_that($updateCar = BaseRecord::getOne('models',['name' => 'A11']));
        expect($updateCar->name)->equals('A11');
    }
    
    public function testDelete()
    {
        expect(BaseRecord::remove('models',['name' => 'A11']));
    }
}
