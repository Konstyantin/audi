<?php

namespace app\controllers;

use app\models\directories\Directories;
use app\models\image\ImageModel;
use Yii;
use yii\filters\AccessControl;
use app\models\admin\LoginForm;
use app\controllers\BaseController;


class SiteController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login'],
                'denyCallback' => function($rule,$action){
                    return $this->goBack();
                },
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     */
    public function actionIndex()
    {
        $slider = ImageModel::load('img/slider/*');
        $services = $this->viewList('service','title');
        $news = $this->getLastList('article',['category' => 'news']);
        $sport = $this->getLastList('article',['category' => 'sport']);

        return $this->render('index',compact('services','news','sport','slider'));
    }

    /**
     * Login action
     */
    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
}
