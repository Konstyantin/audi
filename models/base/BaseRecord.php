<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 21.10.16
 * Time: 12:14
 */
namespace app\models\base;

use yii\db\ActiveRecord;

/**
 * Class BaseRecord contains common method for Records
 * @package app\models\base
 */
class BaseRecord extends ActiveRecord
{
    /** @var string| $table contains table name using record */
    public static $table;

    /**
     * Return table name how using now
     *
     * @return string
     */
    public static function tableName()
    {
        return self::$table;
    }

    /**
     * Set table name how will be using
     *
     * @param $name
     */
    public static function setTable($name)
    {
        self::$table = $name;
    }

    /**
     * Get all item from table
     *
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getAll()
    {
        return self::find()->all();
    }

    /**
     * Get one item from table
     *
     * @param $param
     * @return static
     */
    public static function getOne($param)
    {
        return self::findOne($param);
    }

    /**
     * Get item on param
     *
     * @param $param
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getBy($param)
    {
        return self::find()
            ->where($param)
            ->all();
    }

    /**
     * Remove item on param 
     *
     * @param $param
     * @throws \Exception
     */
    public static function remove($param)
    {
        self::findOne($param)->delete();
    }

    /**
     * Remove all item 
     * 
     * @param null $param
     * @return bool
     */
    public static function removeAll($param = null)
    {
        if($param){
            self::deleteAll($param);
            return true;
        }
        self::removeAll();
        return true;
    }
}