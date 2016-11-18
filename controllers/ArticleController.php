<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 11.11.16
 * Time: 13:53
 */

namespace app\controllers;

use yii\filters\AccessControl;
use app\models\article\Article;
use app\models\base\BaseRequest;
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
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create','update','delete','delete-list'],
                'denyCallback' => function($rule,$action){
                    return $this->goBack();
                },
                'rules' => [
                    [
                        'actions' => ['create','update','delete','delete-list'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    /**
     * actionCreate for create new articles
     *
     * @return string
     */
    public function actionCreate()
    {
        $model = new CreateArticle();
        $category = $this->viewList('article_category');

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
        $pagination = $this->setPagination('article');
        
        $list = $pagination['recordList'];
        $pages = $pagination['pages'];

        return $this->render('list',['list' => $list,'pages' => $pages]);
    }

    /**
     * actionList use for display all exist articles by passed category
     *
     * @return string
     */
    public function actionListCategory()
    {
        $category = BaseRequest::getParamOnUrl('param');

        $pagination = $this->setPagination('article',['category' => $category]);
        $list = $pagination['recordList'];
        $pages = $pagination['pages'];

        return $this->render('list',['list' => $list,'pages' => $pages]);
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

            Directories::removeDirectory(Article::$path . $article->title);
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