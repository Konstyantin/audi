<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 11.11.16
 * Time: 13:53
 */

namespace app\controllers;

use app\controllers\BaseController;
use app\models\article\UpdateArticle;
use app\models\article\CreateArticle;
use app\models\directories\Directories;

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
            Directories::createDirectory('./img/article/' . $model->title);
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
        $article = $this->viewOne('article');

        if($this->delete('article')){

            Directories::removeDirectory('./img/article/' . $article->title);
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

    /**
     * actionUpdate use for update data
     * 
     * @return string|\yii\web\Response
     */
    public function actionUpdate()
    {
        $model = new UpdateArticle();
        $category = $this->viewAll('article_category');
        $article = $this->viewOne('article');

        if ($this->update($model,$article)) {
            $this->setFlash('success','Article update success');
            return $this->goBack('/article/' . $article->id);
        }

        return $this->render('update',['model' => $model,'article' => $article,'category' => $category]);
    }
}