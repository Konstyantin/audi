<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 21.10.16
 * Time: 18:11
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\base\BaseRecord;
use app\models\base\BaseRequest;

/**
 * Class BaseController contains commons method for Controllers
 * @package app\controllers
 */
class BaseController extends Controller
{

    /**
     * To perform create new item to database
     * if was execute request
     *
     * @param $model
     * @return bool
     */
    public function create($model)
    {
        if(BaseRequest::checkModelRequest($model)){
            $values = $model->attributes;
            $model->create($values);
            return true;
        }
    }

    /**
     * Find item and allow us change data this item
     * if was execute request and to perform model method update
     *
     * @param $model
     * @param $item
     * @return mixed
     */
    public function update($model,$item)
    {
        if(BaseRequest::checkModelRequest($model)){
            $values = $model->attributes;
            $model->update($item,$values);
            return true;
        }
    }

    /**
     * Take item id from request and delete item to id
     *
     * @param $table
     * @param $param
     * @return bool
     */
    public function delete($table,$param = null)
    {
        if($table){
            $param = BaseRequest::checkPassParam($param);
            BaseRecord::remove($table,$param);
            return true;
        }
    }

    /**
     * View all items from table
     *
     * @param $table
     * @return mixed
     */
    public function viewAll($table)
    {
        return BaseRecord::getAll($table);
    }

    /**
     * View one item from table and id item
     *
     * @param $table
     * @return mixed
     */
    public function viewOne($table)
    {
        $id = BaseRequest::getParamOnUrl('id');
        return BaseRecord::getOne($table,$id);
    }

    /**
     * Delete all item on table
     *
     * @param $table
     */
    public function deleteAll($table)
    {
        BaseRecord::removeAll($table);
    }

    /**
     * Set new Flash messager
     *
     * @param $status
     * @param $message
     */
    public function setFlash($status,$message)
    {
        Yii::$app->session->setFlash($status,$message);
    }

    /**
     * Select model to choose from array models
     * and check send request from select model
     * after execute create new record
     *
     * @param $models
     * @return mixed
     */
    public function selectModel($models)
    {
        if(is_array($models)){
            foreach ($models as $modelItem){
                if(BaseRequest::checkModelRequest($modelItem)){
                    return $modelItem;
                }
            }
        }

        return $models;
    }

    /**
     * Get last record from set table
     *
     * @param $table
     * @return mixed
     */
    public function lastRecord($table)
    {
        return BaseRecord::getLast($table);
    }

    /**
     * Get all Item by param from set table
     *
     * @param $table
     * @param $param
     * @return static[]
     */
    public function getAllBy($table,$param)
    {
        return BaseRecord::getAllBy($table,$param);
    }

    public function getOneByParam($table,$param = null)
    {
        if($table){
            $param = BaseRequest::checkPassParam($param);
            return BaseRecord::getOne($table,$param);
        }
    }

    /**
     * Delete additional components for item
     * 
     * @param array $params
     */
    public function deleteComponent($params = [])
    {
        foreach ($params as $table => $param){
            $this->delete($table,$param);
        }
    }

}