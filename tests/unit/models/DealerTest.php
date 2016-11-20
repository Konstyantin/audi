<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 20.11.16
 * Time: 17:45
 */

namespace tests\models;

use app\models\base\BaseRecord;
use app\models\dealer\CreateDealer;
use app\models\dealer\UpdateDealer;
use Codeception\Test\Unit;

class DealerTest extends Unit
{
    public function testCreate()
    {
        $model = new CreateDealer();
        $value = [
            'city' => 'Gadiach',
            'street' => 'kalinina 46',
            'location' => 'Ukraine',
            'description' => 'Test description',
        ];

        $model->create($value);

        expect_that($dealer = BaseRecord::getOne('dealer',['city' => 'Gadiach']));
        expect($dealer->city)->equals('Gadiach');
    }
    
    public function testUpdate()
    {
        $model = new UpdateDealer();
        $value = [
            'city' => 'Gadiach city',
            'street' => 'kalinina 46',
            'location' => 'Ukraine',
            'description' => 'Test description',
        ];
        
        $dealer = BaseRecord::getOne('dealer',['city' => 'Gadiach']);
        $model->update($dealer,$value);
        expect_that($updateDealer = BaseRecord::getOne('dealer',['city' => 'Gadiach city']));
        expect($updateDealer->city)->equals('Gadiach city');
    }
    
    public function testDelete()
    {
        BaseRecord::remove('dealer',['city' => 'Gadiach city']);
    }
}