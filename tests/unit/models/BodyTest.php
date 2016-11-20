<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 20.11.16
 * Time: 10:35
 */

namespace tests\models;

use app\models\base\BaseRecord;
use app\models\body\UpdateBody;
use Codeception\Test\Unit;
use app\models\body\CreateBody;

class BodyTest extends Unit
{
    public function testCreate()
    {
        $model = new CreateBody();
        $value = [
            'height' => 2111,
            'width' => 2000,
            'length' => 2000,
            'wheelbase' => 2000,
            'drag' => 2000,
            'weight' => 2000,
        ];
        
        $model->create($value);
        
        expect_that($body = BaseRecord::getOne('body',['height' => 2111]));
        expect($body->height)->equals(2111);
    }
    
    public function testUpdate()
    {
        $model = new UpdateBody();
        $value = [
            'height' => 2222,
            'width' => 2000,
            'length' => 2000,
            'wheelbase' => 2000,
            'drag' => 2000,
            'weight' => 2000,
        ];
        $body = BaseRecord::getOne('body',['height' => 2111]);
        
        $model->update($body,$value);
        
        expect_that($updateBody = BaseRecord::getOne('body',['height' => 2222]));
        expect($updateBody->height)->equals(2222);
    }

    public function testDelete()
    {
        expect(BaseRecord::remove('body',['height' => 2222]));
    }
}