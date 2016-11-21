<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 14.11.16
 * Time: 23:40
 */

namespace app\controllers;

use app\models\base\BaseRequest;
use app\models\technology\UpdateTechnology;
use app\controllers\BaseController;
use yii\filters\AccessControl;

class TechnologyController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['update'],
                'denyCallback' => function($rule,$action){
                    return $this->goBack();
                },
                'rules' => [
                    [
                        'actions' => ['update'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    public function actionUpdate()
    {
        $model = new UpdateTechnology();

        $technologyId = BaseRequest::getParamOnUrl('id');
        $technology = $this->viewOne('technology');

        if($this->update($model,$technology)){
            $this->setFlash('update_technology','technology content update success');
            return $this->goHome();
        }
        return $this->render('update',['model' => $model,'technology' => $technology]);
    }

    public function actionView()
    {
        $param = BaseRequest::getParamOnUrl('param');
        $technology = $this->getOneByParam('technology',['title' => $param]);

        return $this->render('view',['technology' => $technology]);
    }
}