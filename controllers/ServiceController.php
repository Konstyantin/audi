<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 12.11.16
 * Time: 8:14
 */

namespace app\controllers;

use app\controllers\BaseController;
use app\models\service\InspectionRecord;

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

        if($this->create($model)){
            $this->setFlash('success','inspection');
        }

        return $this->render('inspection',['model' => $model,'cars' => $cars]);
    }
}