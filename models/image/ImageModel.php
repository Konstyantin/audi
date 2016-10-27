<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 25.10.16
 * Time: 18:24
 */

namespace app\models\image;

/**
 * Class ImageModel let us manipulate images
 * @package app\models\image
 */
class ImageModel
{
    /**
     * Set path to directory where is files
     *
     * @param $path
     * @return array|bool
     */
    public static function load($path)
    {
        if($path){
            $result = glob($path . '*');
            return $result;
        }
        return false;
    }

    /**
     * Custom method explode which use
     * for to split the $string according to the specified parameters
     *
     * @param $delimiters
     * @param $string
     * @return array
     */
    public static function multiexplode ($delimiters,$string) {
        $ready = str_replace($delimiters, $delimiters[0], $string);
        $launch = explode($delimiters[0], $ready);
        return  $launch;
    }

    /**
     * Check equals $haystack and $needle
     *
     * @param $haystack
     * @param $needle
     * @return bool
     */
    public static function checkMatch($haystack,$needle)
    {
        if($haystack === $needle){
            return true;
        }
        return false;
    }
}