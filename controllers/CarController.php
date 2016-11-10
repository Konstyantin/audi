<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 8:49
 */

namespace app\controllers;

use app\controllers\BaseController;


use app\models\base\BaseRecord;
use app\models\base\BaseRequest;
use app\models\car\Car;
use app\models\car\CreateCar;
use app\models\body\CreateBody;
use app\models\car\SelectEngine;
use app\models\car\SelectTransmission;
use app\models\directories\Directories;
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
        $body = new CreateBody();
        $fuel = new CreateFuel();
        $performance = new CreatePerformance();

        $car = new CreateCar([
            'fuel_id' => $this->lastRecord('fuel'),
            'body_id' => $this->lastRecord('body'),
            'performance_id' => $this->lastRecord('performance'),
        ]);

        if (BaseRequest::checkRequest()) {
            $model = $this->selectModel([$body,$fuel,$performance,$car]);
            if($this->create($model)){
                if($model === $car){
                    Directories::createDirectory('./img/car/' . $model->name);
                    $this->setFlash('success','Create success');
                    return $this->goBack('/model/list');
                }
            }
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
        $imgs = ImageModel::load('img/car/logo/');
        return $this->render('list',compact('list','imgs'));
    }

    /**
     * View car by get param
     *
     * @return string
     */
    public function actionView()
    {

        $name = BaseRequest::getParamOnUrl('param');
        $car = Car::getData(['name' => $name]);

        $imgGallery = ImageModel::load('img/car/' . $name . '/*.jpg');

        if(Car::carName($name)){
            $name = Car::carName($name);
        }

        return $this->render('view',compact('car','imgGallery','name'));
    }

    /**
     * Get car by request param $name search car by $name
     *
     * @return string
     */
    public function actionDetails()
    {
        $name = BaseRequest::getParamOnUrl('param');
        $car = Car::getData(['name' => $name]);

        if(Car::carName($name)){
            $name = Car::carName($name);
        }

        return $this->render('details',['car' => $car,'name' => $name]);
    }

    /**
     * action SelectEngine select new engine for car
     *
     * @return string
     */
    public function actionSelectEngine()
    {
        $model = new SelectEngine();
        $engines = $this->viewAll('engine');
        $car = $this->viewOne('car');

        if(BaseRequest::checkModelRequest($model)){
            $model->update($car);
            $this->setFlash('update','Engine update successful');
        }

        return $this->render('select-engine',['model' => $model,'engines' => $engines]);
    }

    /**
     * action SelectTransmission select new transmission for car
     *
     * @return string
     */
    public function actionSelectTransmission()
    {
        $model = new SelectTransmission();
        $transmissions = $this->viewAll('transmission');
        $car = $this->viewOne('car');

        if(BaseRequest::checkModelRequest($model)){
            $model->update($car);
            $this->setFlash('update','Transmission update successful');
        }

        return $this->render('select-transmission',['model' => $model,'transmissions' => $transmissions]);
    }

    /**
     * action delete car
     * 
     * @return \yii\web\Response
     */
    public function actionDelete()
    {
        $car = $this->viewOne('car');

        if($this->delete('car')){

            Directories::removeDirectory('./img/car/' . $car->name);

            $this->deleteComponent(Car::getCarParam($car));
            $this->setFlash('success','Delete car success');
            return $this->goBack('/model/list');
        }
    }
}