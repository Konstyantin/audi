<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.11.16
 * Time: 21:50
 */

namespace app\controllers;

use app\controllers\BaseController;
use app\models\performance\UpdatePerformance;

class PerformanceController extends BaseController
{
    /**
     * action Update performance for to select car
     * 
     * @return string
     */
    public function actionUpdate()
    {
        $model = new UpdatePerformance();

        $performance = $this->viewOne('performance');

        if($this->update($model,$performance)){
            $this->setFlash('update','Performance successful update');
        }

        return $this->render('update',['model' => $model,'performance' => $performance]);
    }
}