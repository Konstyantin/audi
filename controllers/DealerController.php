<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 15.11.16
 * Time: 22:53
 */

namespace app\controllers;

use yii\filters\AccessControl;
use app\controllers\BaseController;
use app\models\base\BaseRequest;
use app\models\dealer\CreateDealer;
use app\models\dealer\UpdateDealer;
use app\models\testCar\CreateTestCar;

/**
 * Class DealerController
 * @package app\controllers
 */
class DealerController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create','update','delete',
                           'add-car','test-cars','delete-test-car',
                           'tests','delete-test','inspection-list',
                           'delete-inspection'
                ],
                'denyCallback' => function($rule,$action){
                    return $this->goBack();
                },
                'rules' => [
                    [
                        'actions' => ['create','update','delete',
                            'add-car','test-cars','delete-test-car',
                            'tests','delete-test','inspection-list',
                            'delete-inspection'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    /**
     * actionList use for display all exist dealer list
     *
     * @return string
     */
    public function actionList()
    {
        $dealers = $this->viewAll('dealer');
        return $this->render('list',['dealers' => $dealers]);
    }

    /**
     * actionCreate use for create new Dealer
     *
     * @return string
     */
    public function actionCreate()
    {
        $model = new CreateDealer();

        if($this->create($model)){
            $this->setFlash('success','create dealer success');
        }
        return $this->render('create',['model' => $model]);
    }

    /**
     * actionUpdate use for update data about select dealer
     *
     * @return string
     */
    public function actionUpdate()
    {
        $model = new UpdateDealer();

        $dealer = $this->viewOne('dealer');

        if($this->update($model,$dealer)){
            $this->setFlash('success','Dealer date update success');
        }

        return $this->render('update',['model' => $model,'dealer' => $dealer]);
    }

    /**
     * actionView display data about select dealer
     *
     * @return string
     */
    public function actionView()
    {
        $dealer = $this->viewOne('dealer');
        return $this->render('view',['dealer' => $dealer]);
    }
    
    /**
     * actionDelete use for delete select exist dealer
     *
     * @return \yii\web\Response
     */
    public function actionDelete()
    {
        $id = BaseRequest::getParamOnUrl('id');
        if($this->delete('dealer')){
            $this->setFlash('success','dealer delete success');
        }

        return $this->goBack('/dealer/list');
    }

    /**
     * actionAddCar use for add car which will using test
     *
     * @return string|\yii\web\Response
     */
    public function actionAddCar()
    {
        $model = new CreateTestCar();
        $cars = $this->viewAll('car');

        if($this->create($model)){
            return $this->goBack('/dealer/list');
        }
        
        return $this->render('test-car',['model' => $model,'cars' => $cars]);
    }

    /**
     * actionTestCarList use for display exist list test drive car
     *
     * @return string
     */
    public function actionTestCars()
    {
        $cars = $this->viewAll('test_car');

        return $this->render('test-car-list',['cars' => $cars]);
    }

    /**
     * actionDeleteTestCar use for delete select test car
     * 
     * @return \yii\web\Response
     */
    public function actionDeleteTestCar()
    {
        $id = BaseRequest::getParamOnUrl('id');
        $this->delete('test_car');
        return $this->goBack('/dealer/list');
    }

    /**
     * actionTests use for display list test drive
     * 
     * @return string
     */
    public function actionTests()
    {
        $dealerId = BaseRequest::getParamOnUrl('id');
        $list = $this->getAllBy('test_drive',['dealer' => $dealerId]);

        return $this->render('tests',['list' => $list]);
    }

    /**
     * actionDeleteTest use fro delete select test drive
     * 
     * @return \yii\web\Response
     */
    public function actionDeleteTest()
    {
        $id = BaseRequest::getParamOnUrl('id');
        $this->delete('test_drive');
        return $this->goBack('/dealer/tests');
    }

    /**
     * actionInspectionList display list inspection record
     *
     * @return string
     */
    public function actionInspectionList()
    {
        $dealerId = BaseRequest::getParamOnUrl('id');
        $list = $this->getAllBy('inspection',['dealer' => $dealerId]);

        return $this->render('inspection-list',['list' => $list]);
    }

    /**
     * actionDeleteInspection use for delete select inspection record
     *
     * @return \yii\web\Response
     */
    public function actionDeleteInspection()
    {
        $id = BaseRequest::getParamOnUrl('id');
        $this->delete('inspection');
        return $this->goBack('/dealer/inspection-list');
    }
}