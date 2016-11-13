<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 12.11.16
 * Time: 8:14
 */

namespace app\controllers;

use app\controllers\BaseController;
use app\models\base\BaseRequest;
use app\models\service\InspectionRecord;
use app\models\service\UpdateService;

/**
 * Class ServiceController
 * @package app\controllers
 */
class ServiceController extends BaseController
{
    /**
     * actionInspection use for formalize inspection for user car
     *
     * @return string
     */
    public function actionInspection()
    {
        $model = new InspectionRecord();
        $cars = $this->viewAll('car');

        $service = $this->getOneByParam('service',['title' => 'inspection']);

        if($this->create($model)){
            $this->setFlash('success','inspection');
            return $this->goHome();
        }

        return $this->render('inspection',['model' => $model,'cars' => $cars,'service' => $service]);
    }

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
            $this->setFlash('success','Service content update success');
            return $this->goBack('/service/inspection');
        }
        return $this->render('update',['model' => $model,'service' => $service]);
    }
}