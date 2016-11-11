<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 11.11.16
 * Time: 13:53
 */

namespace app\controllers;

use app\models\article\UpdateArticle;
use app\models\base\BaseRequest;
use app\controllers\BaseController;
use app\models\article\CreateArticle;

/**
 * Class ArticleController
 * @package app\controllers
 */
class ArticleController extends BaseController
{
    /**
     * actionCreate for create new articles
     *
     * @return string
     */
    public function actionCreate()
    {
        $model = new CreateArticle();
        $category = $this->viewAll('article_category');

        if($this->create($model)){
            $this->setFlash('success','Article create success');
        }

        return $this->render('create',['model' => $model,'category' => $category]);
    }


    /**
     * actionList use for display all exists articles
     *
     * @return string
     */
    public function actionList()
    {
        $list = $this->viewAll('article');
        return $this->render('list',['list' => $list]);
    }

    /**
     * actionView use for view article item by id
     *
     * @return string
     */
    public function actionView()
    {
        $article = $this->viewOne('article');
        return $this->render('view',['article' => $article]);
    }

    /**
     * actionDelete use for delete article by id
     *
     * @return \yii\web\Response
     */
    public function actionDelete()
    {
        if($this->delete('article')){
            $this->setFlash('success','Article delete success');
        }
        return $this->goBack('/article/list');
    }

    /**
     * actionDeleteList use for delete all exists articles
     *
     * @return \yii\web\Response
     */
    public function actionDeleteList()
    {
        if($this->deleteAll('article')){
            $this->setFlash('success','Article list is clear');
        }
        return $this->goBack('/article/list');
    }
}