<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 21.10.16
 * Time: 19:43
 */

namespace app\controllers;

use Yii;

use app\models\engine\CreateEngine;
use app\models\engine\UpdateEngine;
use app\controllers\BaseController;

use app\models\base\BaseRecord;
/**
 * Class EngineController let us to be manipulated with Engine Item
 * @package app\controllers
 */
class EngineController extends BaseController
{
    /**
     * Create new Engine
     *
     * @return string
     */
    public function actionCreate()
    {
        $model = new CreateEngine();

        if ($this->create($model)) {
            return $this->goBack('/engine/list');
        }

        return $this->render('create',['model' => $model]);
    }

    /**
     * Update data about take Engine 
     *  
     * @return string
     */
    public function actionUpdate()
    {
        $model = new UpdateEngine();
        $engine = $this->viewOne('engine');
        
        if ($this->update($model,$engine)) {
            $this->setFlash('update', 'Engine successful update');
        }
        
        return $this->render('update',compact('model','engine'));
    }

    /**
     * Delete one Engine by Id
     *
     * @return \yii\web\Response
     */
    public function actionDelete()
    {
        if($this->delete('engine')){
            $this->setFlash('delete','Engine delete successful');
        }

        return $this->goBack('/engine/list');
    }

    /**
     * Delete All list items
     *
     * @return \yii\web\Response
     */
    public function actionDeleteList()
    {
        $this->deleteAll('engine');
        return $this->goBack('/engine/list');
    }

    /**
     * View All list items
     *
     * @return string
     */
    public function actionList()
    {
        
        $list = $this->viewAll('engine');

        return $this->render('list',['list' => $list]);
    }

    /**
     * View one item by id
     * 
     * @return string
     */
    public function actionView()
    {
        $engine = $this->viewOne('engine');

        return $this->render('view',['engine' => $engine]);
    }
}