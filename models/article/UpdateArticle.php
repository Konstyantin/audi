<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 11.11.16
 * Time: 18:10
 */

namespace app\models\article;

use yii\base\Model;
use app\models\article\Article;
use app\models\directories\Directories;
/**
 * Class UpdateArticle
 * @package app\models\article
 */
class UpdateArticle extends Model
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
     * Get item title before update select item
     *
     * @param $item
     * @return mixed
     */
    public function getItemTitle($item)
    {
        return $item->title;
    }

    /**
     * Execute rename exists directory which refers to select item
     *
     * @param $item
     */
    public function renameDir($item)
    {
        $oldDir = Article::$path . $item;
        $newDir = Article::$path . $this->title;
        Directories::renameDir($oldDir,$newDir);
    }

    /**
     * Update article and add article in database
     * take array data from form CreateEngine
     *
     * @param $article
     * @param $values
     */
    public function update($article,$values)
    {
        $item = $this->getItemTitle($article);
        $article->updateAttributes($values);
        $article->update();
        $this->renameDir($item);
        return $article;
    }
}