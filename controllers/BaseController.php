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

/**
 * Class BaseController contains commons method for Controllers
 * @package app\controllers
 */
class BaseController extends Controller
{
    /**
     * Check execute if the model request
     *
     * @param $model
     * @return bool
     */
    public function checkModelRequest($model)
    {
        if($model->load(Yii::$app->request->post())){
            return true;
        }
    }

    /**
     * To perform create new item to database
     * if was execute request
     *
     * @param $model
     * @return bool
     */
    public function create($model)
    {
        if($this->checkModelRequest($model)){
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
     * @return mixed
     */
    public function update($model,$item)
    {
        if($this->checkModelRequest($model)){
            $values = $model->attributes;
            $model->update($item,$values);
            return true;
        }
    }

    /**
     * Take item id from request and delete item to id
     *
     * @param $table
     * @return bool
     */
    public function delete($table)
    {
        $id = $this->getParamOnUrl('id');
        
        if($id and $table) {
            BaseRecord::remove($table,$id);
            return true;
        }
    }

    /**
     * View all items from table
     *
     * @param $tabel
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
        $id = $this->getParamOnUrl('id');
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
     * Get param from request
     *
     * @return mixed
     */
    public function getParamOnUrl($param)
    {
        return Yii::$app->request->get($param);
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
     * Check execute if the request
     *
     * @return bool
     */
    public function checkRequest()
    {
        if(Yii::$app->request->post()){
            return true;
        }
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
                if($this->checkModelRequest($modelItem)){
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
}