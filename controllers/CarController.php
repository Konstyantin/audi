<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 8:49
 */

namespace app\controllers;

use app\controllers\BaseController;

class CarController extends BaseController
{
    public function actionCreate()
    {
        return $this->render('create');
    }
}