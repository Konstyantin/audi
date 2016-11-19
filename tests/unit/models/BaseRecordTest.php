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
    public function testSetTable()
    {
        BaseRecord::setTable('engine');
        expect(BaseRecord::tableName())->equals('engine');
    }

    public function testGetAll()
    {
        expect_that($allEngine = BaseRecord::getAll('engine'));
        expect($allEngine)->notEmpty();
    }

    /**
     * will edit
     */
    public function testSelectParam()
    {
        $tets = null;
        expect_that($selectParam = BaseRecord::selectParam('engine',['id','name']));
        expect($selectParam)->notEmpty();
    }

    public function testGetOne()
    {
        expect_that($engine = BaseRecord::getOne('engine',['id' => 1]));
        expect($engine->name)->equals('1.4 TFSI');
    }
    
    public function testGetBy()
    {
        expect_that($engineByParam = BaseRecord::getBy('engine',['name'=>'1.4 TFSI']));
        expect($engineByParam)->notEmpty();
    }
    
    public function testGetAllBy()
    {
        expect_that($engine = BaseRecord::getAllBy('engine',['num_cylinders' => 6]));
        expect($engine)->count(2);
    }

    public function testRemove()
    {
//        expect(BaseRecord::remove(['id' => 12]));
//        expect_not(BaseRecord::getBy(['id' => 9]));
    }
    
    public function testDeleteAll()
    {
//           expect(BaseRecord::removeAll('test_drive'));
    }
    
    public function getLast()
    {
        expect_that($last = BaseRecord::setTable('engine'));
        expect($last->id)->equals(16);
    }
        
    public function testGetLastList()
    {
        expect_that($article = BaseRecord::getLastList('article',['category' => 'sport'],4));
        expect($article)->count(4);
        expect_that($news = BaseRecord::getLastList('article',['category' => 'news'],3));
        expect($news)->count(3);
        $news = BaseRecord::getLastList('article',['category' => 'asd'],3);
        $this->assertEmpty($news);
    }
    
}
