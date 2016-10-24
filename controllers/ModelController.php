<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 0:56
 */

namespace app\controllers;

use app\models\carModel\CreateCarModel;
use app\models\carModel\UpdateCarModel;
use app\controllers\BaseController;

/**
 * Class ModelController let us to be manipulated with Model Item
 * @package app\controllers
 */
class ModelController extends BaseController
{
    /**
     * Create new Model
     *
     * @return string
     */
    public function actionCreate()
    {
        $model = new CreateCarModel();

        if($this->create($model)){
            return $this->goBack('/model/list');
        }

        return $this->render('create',['model'=>$model]);
    }

    /**
     * View All list items
     *
     * @return string
     */
    public function actionList()
    {
        $list = $this->viewAll('models');
        return $this->render('list',['list' => $list]);
    }

    /**
     * Update data about take Engine
     *
     * @return string
     */
    public function actionUpdate()
    {
        $model = new UpdateCarModel();
        $modelItem = $this->viewOne('models');

        if ($this->update($model,$modelItem)) {
            $this->setFlash('model_update', 'Model successful update');
        }

        return $this->render('update',compact('model','modelItem'));
    }

    /**
     * Delete one Engine by Id
     *
     * @return \yii\web\Response
     */
    public function actionDelete()
    {
        if($this->delete('models')){
            $this->setFlash('delete_model','Models delete successful');
        }

        return $this->goBack('/model/list');
    }

    /**
     * Delete All list items
     *
     * @return \yii\web\Response
     */
    public function actionDeleteList()
    {
        $this->deleteAll('models');
        return $this->goBack('/model/list');
    }
}