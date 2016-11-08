<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.11.16
 * Time: 20:27
 */

namespace app\controllers;

use app\controllers\BaseController;
use app\models\body\UpdateBody;

/**
 * Class BodyController let us to be manipulated with Body Item
 * @package app\controllers
 */
class BodyController extends BaseController
{
    /**
     * action Update let to update the received data
     *
     * @return string
     */
    public function actionUpdate()
    {
        $model = new UpdateBody();

        $body = $this->viewOne('body');
        if($this->update($model,$body)){
            $this->setFlash('update','Body successful update');
        }
        
        return $this->render('update',['model' => $model,'body' => $body]);
    }
}