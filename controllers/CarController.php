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
use app\models\fuel\Fuel;
use app\models\performance\CreatePerformance;
use app\models\fuel\CreateFuel;

class CarController extends BaseController
{
    public function actionCreate()
    {
        $body = new CreateBody();
        $fuel = new CreateFuel();
        $performance = new CreatePerformance();

        return $this->render('create',compact('body','performance','fuel'));
    }
}