<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 28.10.16
 * Time: 20:07
 */

namespace tests\models;

use app\models\image\ImageModel;
use Codeception\Test\Unit;

class ImageModelTest extends Unit
{
    public function testCheckMatch()
    {
        expect_that($resTrue = ImageModel::checkMatch('test', 'test'));
        expect($resTrue)->true();
    }
}
