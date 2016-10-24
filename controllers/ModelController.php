<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 0:56
 */

namespace app\controllers;

use app\controllers\BaseController;

use app\models\model\CreateModel;

/**
 * Class ModelController let us to be manipulated with Model Item
 * @package app\controllers
 */
class ModelController extends BaseController
{
    /**
     * Create new Model
     *
     * @return string
     */
    public function actionCreate()
    {
        $model = new CreateModel();
        if($this->create($model)){
            return $this->goBack('/model/list');
        }
        return $this->render('create',['model'=>$model]);
    }
}