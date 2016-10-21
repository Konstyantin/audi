<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 21.10.16
 * Time: 18:11
 */

namespace app\controllers;

use yii\base\Controller;
use app\models\base\BaseRecord;

/**
 * Class BaseController contains commons method for Controllers
 * @package app\controllers
 */

class BaseController extends Controller
{
    /**
     * Check execute if the request
     *
     * @param $model
     * @return bool
     */
    public function checkRequest($model)
    {
        if($model->load(Yii::$app->request->post())){
            return true;
        }
    }

    /**
     * To perform add new item to database
     * if was execute request
     *
     * @param $model
     */
    public function create($model)
    {
        if($this->checkRequest($model)){
            $values = $model->attributes;
            $model->create($values);
        }
    }

    /**
     * Find item and allow us change data this item
     * if was execute request and to perform model method update
     *
     * @param $model
     * @return mixed
     */
    public function update($model)
    {
        if($this->checkRequest($model)){
            $values = $model->attributes;
            $model->update($values);
            return $this->goBack('/basic/web/');
        }
    }

    /**
     * Take item id from request and delete item to id
     *
     * @param $table
     */
    public function delete($table)
    {
        $id = $this->getIdOnUrl();
        BaseRecord::setTable($table);
        BaseRecord::remove($id);
    }

    /**
     * View all items from table
     *
     * @param $tabel
     * @return mixed
     */
    public function viewAll($tabel)
    {
        BaseRecord::setTable($tabel);
        return BaseRecord::getAll();
    }

    /**
     * View one item from table and id item
     *
     * @param $table
     * @param $id
     * @return mixed
     */
    public function viewOne($table,$id)
    {
        BaseRecord::setTable($table);
        return BaseRecord::getOne($id);
    }

    /**
     * Get id param from request
     *
     * @return mixed
     */
    public function getIdOnUrl()
    {
        return Yii::$app->request->get('id');
    }
}