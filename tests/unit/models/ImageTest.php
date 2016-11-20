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
use app\models\image\ImageModel;
class ImageTest extends Unit
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
        $result = $model->checkExists('/img/dealer/general.jpg');
        $this->isTrue($result);
    }

    public function testCheckMatch()
    {
        expect_that($resTrue = ImageModel::checkMatch('test', 'test'));
        expect($resTrue)->true();
    }
}
