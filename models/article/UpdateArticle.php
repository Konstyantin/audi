<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 11.11.16
 * Time: 18:10
 */

namespace app\models\article;

use yii\base\Model;

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
    public $category_id;
    /** @var int| $power set type engine */

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['title','content','category_id'], 'required'],
        ];
    }

    /**
     * Update article and add article in database
     * take array data from form CreateEngine
     *
     * @param $values
     */
    public function update($item,$values)
    {
        $article = $item;
        $article->updateAttributes($values);
        $article->update();
        return $article;
    }
}