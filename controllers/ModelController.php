<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 0:56
 */

namespace app\controllers;

use yii\filters\AccessControl;
use app\models\base\BaseRequest;
use app\models\carModel\CreateCarModel;
use app\models\carModel\UpdateCarModel;
use app\controllers\BaseController;
use app\models\image\ImageModel;

/**
 * Class ModelController let us to be manipulated with Model Item
 * @package app\controllers
 */
class ModelController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create','update','delete','delete-list'],
                'denyCallback' => function($rule,$action){
                    return $this->goBack();
                },
                'rules' => [
                    [
                        'actions' => ['create','update','delete','delete-list'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    /**
     * Create new Model
     *
     * @return string
     */
    public function actionCreate()
    {
        $model = new CreateCarModel();

        if($this->create($model)){
            $this->setFlash('create_model','create model success');
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
        $list = $this->viewList('models');
        $imgs = ImageModel::load('img/models/');
        return $this->render('list',['list' => $list,'imgs' => $imgs]);
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
        $this->delete('models');

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

    /**
     * View a list of all cars belonging to the group specified id
     *
     * @return string
     */
    public function actionCars()
    {
        $id = BaseRequest::getParamOnUrl('id');
        $imgs = ImageModel::load('img/car/logo/');
        $list = $this->getAllBy('car',['model_id' => $id]);
        return $this->render('cars',compact('list','imgs'));
    }
}