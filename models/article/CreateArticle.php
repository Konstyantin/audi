<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 11.11.16
 * Time: 13:59
 */

namespace app\models\article;

use yii\base\Model;
use app\models\article\Article;
use app\models\directories\Directories;

/**
 * Class CreateArticle
 * @package app\models\article
 */
class CreateArticle extends Model
{
    /** @var int| $title contains type title article */
    public $title;
    /** @var int| $content set the number content article */
    public $content;
    /** @var int| $category_id set category article */
    public $category;
    /** @var int| $power set type engine */

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['title','content','category'], 'required'],
            [['title'],'string','min' => 5],
        ];
    }

    /**
     * get path to directory which hold all article directory and perform
     * concatenate with title article which will be create before passes
     * param $dirName to method Directories::createDirectory for create new directory
     * with passed name
     */
    public function createDir()
    {
        $dirName = Article::$path . $this->title;
        Directories::createDirectory($dirName);
    }

    /**
     * Create new Engine and add it in database
     * take array data from form CreateEngine
     *
     * @param $values
     */
    public function create($values)
    {
        $article = new Article(['scenario' => Article::SCENARIO_ARTICLE]);
        $article->attributes = $values;
        $article->save();
        $this->createDir();
    }
}