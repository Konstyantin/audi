<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 12.11.16
 * Time: 8:14
 */

namespace app\controllers;

use app\models\service\TestDrive;
use app\controllers\BaseController;
use app\models\base\BaseRequest;
use app\models\service\InspectionRecord;
use app\models\service\UpdateService;
use app\models\service\TestDriveRecord;
use yii\filters\AccessControl;

/**
 * Class ServiceController
 * @package app\controllers
 */
class ServiceController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['update'],
                'denyCallback' => function($rule,$action){
                    return $this->goBack();
                },
                'rules' => [
                    [
                        'actions' => ['update'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    /**
     * actionInspection use for formalize inspection for user car
     *
     * @return string
     */
    public function actionInspection()
    {
        $model = new InspectionRecord();
        $cars = $this->viewList('car');
        $dealers = $this->viewList('dealer','city');
        $service = $this->getOneByParam('service',['title' => 'inspection']);

        if($this->create($model)){
            $this->setFlash('success','inspection');
            return $this->goHome();
        }

        return $this->render('inspection',compact('model','cars','service','dealers'));
    }

    /**
     * actionTestDrive use for registration user test drive
     *
     * @return string
     */
    public function actionTestDrive()
    {
        $model = new TestDriveRecord();

        $car = $this->viewList('test_car');
        $service = $this->getOneByParam('service',['title' => 'Test Drive']);
        $dealer = $this->viewList('dealer','city');

        if(BaseRequest::checkModelRequest($model)){
            if($model->checkTest()){
                $values = $model->attributes;
                $model->create($values);

                $this->setFlash('test_drive_success','Your application is accepted we will contact with you');
                return $this->goBack('/service/testDrive');
            }
            $this->setFlash('fail_test','Sorry this time is taken, choose another time');
        }
        
        return $this->render('test-drive',compact('model','car','service','dealer'));
    }

    /**
     * actionView display all information about record
     *
     * @return string
     */
    public function actionView()
    {
        $param = BaseRequest::getParamOnUrl('param');
        
        $service = $this->getOneByParam('service',['title' => $param]);
        
        return $this->render('view',['service' => $service]);
    }

    /**
     * actionUpdate use for update data about sevice
     *
     * @return string|\yii\web\Response
     */
    public function actionUpdate()
    {
        $model = new UpdateService();

        $serviceId = BaseRequest::getParamOnUrl('id');
        $service = $this->viewOne('service');

        if($this->update($model,$service)){
            $this->setFlash('update_service','Service content update success');
            return $this->goHome();
        }
        return $this->render('update',['model' => $model,'service' => $service]);
    }
}