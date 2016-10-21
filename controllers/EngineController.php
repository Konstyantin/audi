<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 21.10.16
 * Time: 19:43
 */

namespace app\controllers;

use app\models\engine\CreateEngine;
use app\controllers\BaseController;

class EngineController extends BaseController
{
    public function actionCreate()
    {
        $model = new CreateEngine();

        $this->create($model);

        return $this->render('create',['model' => $model]);
    }
    
}