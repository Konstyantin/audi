<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 20.11.16
 * Time: 10:13
 */

namespace tests\models;

use app\models\article\CreateArticle;
use app\models\article\UpdateArticle;
use app\models\base\BaseRecord;
use Codeception\Test\Unit;

class ArticleTest extends Unit
{
    public function testCreate()
    {
        $model = new CreateArticle();
        $value = [
            'title' => 'test article',
            'content' => 'test content',
            'category' => 'article category',
        ];
        
        $model->create($value);
        
        expect_that($article = BaseRecord::getOne('article',['title' => 'test article']));
        expect($article->title)->equals('test article');
    }

    public function testUpdate()
    {
        $model = new UpdateArticle();
        $value = [
            'title' => 'test article update',
            'content' => 'test content',
            'category' => 'article category',
        ];

        $article = BaseRecord::getOne('article',['title' => 'test article']);

        $model->update($article,$value);

        expect_that($updateArticle = BaseRecord::getOne('article',['title' => 'test article update']));
        expect($updateArticle->title)->equals('test article update');
    }

    public function testDelete()
    {
        expect(BaseRecord::remove('article',['title' => 'test article update']));
    }
}