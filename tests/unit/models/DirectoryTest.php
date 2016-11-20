<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 20.11.16
 * Time: 17:57
 */

namespace tests\models;

use Codeception\Test\Unit;
use app\models\directories\Directories;

class DirectoryTest extends Unit
{
    public function testCheckExist()
    {
        $dirPath = './img/article/';
        $dirRes = Directories::checkExist($dirPath);
        
        expect($dirRes)->equals(true);

    }

    public function testGetFileOnDir()
    {
        $files = Directories::getFileOnDir('./img/dealer/');
        $this->isTrue($files);
    }

    public function testCreateDirectory()
    {
        Directories::createDirectory('./img/test/');
        expect(Directories::checkExist('./img/test/'))->equals(true);
    }
    
    public function testRemoveDirectory()
    {
        Directories::removeDirectory('./img/test/');
        expect(Directories::checkExist('./img/test/'))->equals(false);
    }
    
    public function testRemoveDirFiles()
    {
        Directories::removeDirFiles('./img/test/');
        $files = Directories::getFileOnDir('./img/test/');
        $this->isFalse($files);
    }

    public function testRenameDir()
    {
        Directories::renameDir('./img/test/','./img/test2/');
        expect(Directories::checkExist('./img/test/'))->equals(false);
    }
}