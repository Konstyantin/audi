<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 28.10.16
 * Time: 22:32
 */

namespace tests\models;

use Codeception\Test\Unit;
use app\models\image\ImageList;
class ImageListTest extends Unit
{
    public function testShapePath()
    {
        $model = new ImageList();
        expect_that($result = $model->shapePath('test'));
        expect($result)->equals('./test');
    }
    
    public function testCheckExists()
    {
        $model = new ImageList();
        expect_that($result = $model->checkExists('img/models/A7.png'));
        
    }
}
