<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 21.10.16
 * Time: 14:18
 */

namespace tests\models;

use Yii;
use app\models\base\BaseRecord;
use Codeception\Test\Unit;

class BaseRecordTest extends Unit
{
    public function _before()
    {
        BaseRecord::setTable('engine');
    }

    public function testSetTable()
    {
        expect(BaseRecord::$table)->equals('engine');
    }

    public function testGetAll()
    {
        expect_that($allEngine = BaseRecord::getAll());
        expect($allEngine)->notEmpty();
    }

    public function testGetOne()
    {
        expect_that($engine = BaseRecord::getOne(['id' => 15]));
        expect($engine->type)->equals('TDI');
    }
    
    public function testGetByParam()
    {
        expect_that($engineByParam = BaseRecord::getBy(['type'=>'TDI']));
        expect($engineByParam)->notEmpty();
    }

    public function testRemove()
    {
//        expect(BaseRecord::remove(['id' => 12]));
//        expect_not(BaseRecord::getBy(['id' => 9]));
    }
    
}
