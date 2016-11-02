<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 8:49
 */

namespace app\controllers;

use app\controllers\BaseController;
use app\models\body\CreateBody;
use app\models\performance\CreatePerformance;

class CarController extends BaseController
{
    public function actionCreate()
    {
        $body = new CreateBody();
        $this->create($body);
        $performance = new CreatePerformance();
        $this->create($performance);
        return $this->render('create',compact('body','performance'));
    }
}