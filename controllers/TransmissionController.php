<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 23.10.16
 * Time: 20:10
 */

namespace app\controllers;

use app\controllers\BaseController;
use yii\filters\AccessControl;
use app\models\transmission\CreateTransmission;
use app\models\transmission\UpdateTransmission;
use app\models\image\ImageModel;


/**
 * Class TransmissionController let us to be manipulated with Transmission Item
 * @package app\controllers
 */
class TransmissionController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create','update','delete'],
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
     * Create new Transmission
     *
     * @return string
     */
    public function actionCreate()
    {
        $model = new CreateTransmission();

        if($this->create($model)){
            $this->goBack('/transmission/list');
        }
        
        return $this->render('create',['model' => $model]);
    }

    /**
     * View All list Transmissions
     *
     * @return string
     */
    public function actionList()
    {
        $list = $this->viewList('transmission');
        $imgs = ImageModel::load('img/transmission/*.png');

        return $this->render('list',['list' => $list,'imgs' => $imgs]);
    }

    /**
     * Update data about take Transmission
     *
     * @return string
     */
    public function actionUpdate()
    {
        $model = new UpdateTransmission();
        $transmission = $this->viewOne('transmission');

        if ($this->update($model,$transmission)) {
            $this->setFlash('update_transmission','Trasmission data update');
        }

        return $this->render('update',compact('model','transmission'));
    }

    /**
     * View one Transmission by id
     * @return string
     */
    public function actionView()
    {
        $transmission = $this->viewOne('transmission');

        return $this->render('view',['transmission' => $transmission]);
    }

    /**
     * Delete one Transmission by Id
     *
     * @return \yii\web\Response
     */
    public function actionDelete()
    {
        if ($this->delete('transmission')) {
            $this->setFlash('delete_transmission','Delete Transmission successful');
        }

        return $this->goBack('/transmission/list');
    }

    /**
     * Delete All list Transmissions
     *
     * @return \yii\web\Response
     */
    public function actionDeleteList()
    {
        $this->deleteAll('transmission');
        return $this->goBack('/transmission/list');
    }
}