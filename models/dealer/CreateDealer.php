<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 16.11.16
 * Time: 0:01
 */

namespace app\models\dealer;

use yii\base\Model;

/**
 * Class CreateDealer
 * @package app\models\dealer
 */
class CreateDealer extends Model
{
    /** @var int| $city set city */
    public $city;
    /** @var int| $street set street */
    public $street;
    /** @var int| $location set location */
    public $location;
    /** @var int| $description set type description */
    public $description;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['city','street','location','description'],'required'],
            [['city','street','location'],'string','length' => [4,45]],
        ];
    }

    /**
     * Create new Dealer and add it in database
     * take array data from form CreateDealer
     *
     * @param $values
     */
    public function create($values)
    {
        $dealer = new Dealer(['scenario' => Dealer::SCENARIO_DEALER]);
        $dealer->attributes = $values;
        $dealer->save();
    }
}