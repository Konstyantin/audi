<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 11.11.16
 * Time: 13:56
 */
namespace app\models\article;

use app\models\base\BaseRecord;

/**
 * Class Article
 * @package app\models\article
 */
class Article extends BaseRecord
{

    const SCENARIO_ARTICLE = 'article';

    /**
     * Set using scenarious
     *
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_ARTICLE] = ['title','content','category_id'];
        return $scenarios;
    }

    /**
     * Set using tableName
     *
     * @return string
     */
    public static function tableName()
    {
        return 'article';
    }
}