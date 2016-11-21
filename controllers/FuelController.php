<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.11.16
 * Time: 22:20
 */

namespace app\controllers;

use app\controllers\BaseController;
use app\models\fuel\UpdateFuel;

/**
 * Class FuelController
 * @package app\controllers
 */
class FuelController extends BaseController
{
    /**
     * action Update performance for to select car
     *
     * @return string
     */
    public function actionUpdate()
    {
        $model = new UpdateFuel();
        $fuel = $this->viewOne('fuel');

        if($this->update($model,$fuel)){
            $this->setFlash('update_fuel','Fuel successful update');
        }

        return $this->render('update',['model' => $model,'fuel' => $fuel]);
    }
}