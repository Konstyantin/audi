<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 10.11.16
 * Time: 17:00
 */

namespace app\models\directories;

/**
 * Class Directories let us manage behavior directory and file which exists in directory
 * @package app\models\directories
 */
class Directories
{
    /**
     * Check exist directory if directory exists return true else return false
     *
     * @param $name
     * @return bool
     */
    public static function checkExist($name)
    {
        if(is_dir($name)){
            return true;
        }
        return false;
    }

    /**
     * Create new directory by $name if directory have this name don't exists
     *
     * @param $name
     * @return bool
     */
    public static function createDirectory($name)
    {
        if(!self::checkExist($name)){
            mkdir($name,0777,true);
        }
        return false;
    }

    /**
     * Remove directory by $name if this directory exist else return false
     *
     * @param $name
     * @return bool
     */
    public static function removeDirectory($name)
    {
        if(self::checkExist($name)){
            self::removeDirFiles($name);
            return rmdir($name);
        }
        return false;
    }

    /**
     * Get all files which exists in directory $dir
     *
     * @param $dir
     * @return array
     */
    public static function getFileOnDir($dir)
    {
        return $files = glob($dir . '/*');
    }

    /**
     * Remove all files which exists in directory
     *
     * @param $dir
     * @return bool
     */
    public static function removeDirFiles($dir)
    {
        $files = self::getFileOnDir($dir);
        if($files){
            foreach ($files as $file) {
                unlink($file);
            }
        }
        return false;
    }

    public static function renameDir($oldName,$newName)
    {
        if(self::checkExist($oldName)){
            return rename($oldName,$newName);
        }
        return false;
    }
}