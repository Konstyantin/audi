<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 21.10.16
 * Time: 12:14
 */
namespace app\models\base;

use yii\db\ActiveRecord;
use yii\data\Pagination;

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
    public static function getAll($table)
    {
        self::setTable($table);
        return self::find()->all();
    }

    /**
     * Get list record and return define param
     *
     * @param $table
     * @param $param
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function selectParam($table,$param)
    {
        self::setTable($table);
        return self::find()->select($param)->all();
    }

    /**
     * Get one item from table
     *
     * @param $param
     * @return static
     */
    public static function getOne($table,$param)
    {
        self::setTable($table);
        return self::findOne($param);
    }

    /**
     * Get item on param
     *
     * @param $param
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getBy($table,$param)
    {
        self::setTable($table);
        return self::find()
            ->where($param)
            ->all();
    }

    /**
     * Get all items by $param
     * 
     * @param $table
     * @param $param
     * @return static[]
     */
    public static function getAllBy($table,$param)
    {
        self::setTable($table);
        return self::findAll($param);
    }

    /**
     * Remove item on param 
     *
     * @param $param
     * @throws \Exception
     */
    public static function remove($table,$param)
    {
        self::setTable($table);
        self::findOne($param)->delete();
    }

    /**
     * Remove all item 
     *
     * @return bool
     */
    public static function removeAll($table)
    {
        self::setTable($table);
        return self::deleteAll();
    }

    /**
     * Get last add record to table by id
     *
     * @return mixed
     */
    public static function getLast($table)
    {
        self::setTable($table);
        return self::find()->max('id');
    }

    /**
     * Set pagination for received list record by regulation table
     * set count of record per page depending on param $pageSize
     * if $pageSize not null then $pageSize assign passed value
     * else use default value
     *
     * @param $table
     * @param $search
     * @param $pageSize
     * @return array
     */
    public static function pagination($table,$search = null,$pageSize = 9)
    {
        self::setTable($table);

        $records = BaseRecord::find($table);

        $pages = new Pagination(['totalCount' => $records->count(),'pageSize' => $pageSize,'pageSizeParam' => false,'forcePageParam' => false]);
        $recordList = $records->offset($pages->offset)->where($search)
                              ->limit($pages->limit)
                              ->all();

        return ['pages' => $pages, 'recordList' => $recordList];

    }
}