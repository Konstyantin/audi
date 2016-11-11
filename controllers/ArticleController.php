<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 11.11.16
 * Time: 13:53
 */

namespace app\controllers;

use app\controllers\BaseController;
use app\models\article\CreateArticle;
use app\models\base\BaseRequest;

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
}