<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 8:49
 */

namespace app\controllers;

use app\controllers\BaseController;


use app\models\car\CreateCar;
use app\models\body\CreateBody;
use app\models\fuel\CreateFuel;
use app\models\image\ImageModel;
use app\models\performance\CreatePerformance;

class CarController extends BaseController
{
    /**
     * Create new Car
     *
     * @return string
     */
    public function actionCreate()
    {
        $car = new CreateCar([
            'fuel_id' => $this->lastRecord('fuel'),
            'body_id' => $this->lastRecord('body'),
            'performance_id' => $this->lastRecord('performance'),
        ]);
        $body = new CreateBody();
        $fuel = new CreateFuel();
        $performance = new CreatePerformance();


        if ($this->checkRequest()) {
            $model = $this->selectModel([$body,$fuel,$performance,$car]);
            $this->create($model);
        }

        return $this->render('create',compact('body','performance','fuel','car','test'));
    }

    /**
     * View all list items
     *
     * @return string
     */
    public function actionList()
    {
        $list = $this->viewAll('car');
        $imgs = ImageModel::load('img/car/');
        return $this->render('list',compact('list','imgs'));
    }

    /**
     * View car by get id
     *
     * @return string
     */
    public function actionView()
    {
        $id = $this->getParamOnUrl('id');
        $imgs = ImageModel::load('img/car/');
        $list = $this->getAllBy('car',['model_id' => $id]);
        return $this->render('model',compact('list','imgs'));
    }
}