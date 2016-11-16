<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 15.11.16
 * Time: 22:53
 */

namespace app\controllers;

use app\controllers\BaseController;
use app\models\base\BaseRequest;
use app\models\dealer\CreateDealer;
use app\models\dealer\UpdateDealer;

class DealerController extends BaseController
{
    /**
     * actionList use for display all exist dealer list
     *
     * @return string
     */
    public function actionList()
    {
        $dealers = $this->viewAll('dealer');
        return $this->render('list',['dealers' => $dealers]);
    }

    /**
     * actionCreate use for create new Dealer
     *
     * @return string
     */
    public function actionCreate()
    {
        $model = new CreateDealer();

        if($this->create($model)){
            $this->setFlash('success','create dealer success');
        }
        return $this->render('create',['model' => $model]);
    }

    /**
     * actionUpdate use for update data about select dealer
     *
     * @return string
     */
    public function actionUpdate()
    {
        $model = new UpdateDealer();

        $dealer = $this->viewOne('dealer');

        if($this->update($model,$dealer)){
            $this->setFlash('success','Dealer date update success');
        }

        return $this->render('update',['model' => $model,'dealer' => $dealer]);
    }

    /**
     * actionView display data about select dealer
     *
     * @return string
     */
    public function actionView()
    {
        $dealer = $this->viewOne('dealer');
        return $this->render('view',['dealer' => $dealer]);
    }
    
    /**
     * actionDelete use for delete select exist dealer
     *
     * @return \yii\web\Response
     */
    public function actionDelete()
    {
        $id = BaseRequest::getParamOnUrl('id');
        if($this->delete('dealer')){
            $this->setFlash('success','dealer delete success');
        }

        return $this->goBack('/dealer/list');

    }

}