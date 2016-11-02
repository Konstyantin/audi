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

class CarController extends BaseController
{
    public function actionCreate()
    {
        $body = new CreateBody();
        
        return $this->render('create',compact('body'));
    }
}