<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 16.11.16
 * Time: 0:15
 */

namespace app\models\dealer;

use yii\base\Model;

/**
 * Class UpdateDealer
 * @package app\models\dealer
 */
class UpdateDealer extends Model
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
            [['city','street','location'],'string','min' => 5, 'max' => 45],
        ];
    }

    /**
     * Update data about Dealer
     * Get data from database and change to data from form UpdateDealer *
     *
     * @param $item
     * @param $values
     * @return mixed
     */
    public function update($item,$values)
    {
        $dealer = $item;
        $dealer->updateAttributes($values);
        $dealer->update();
        return $dealer;
    }

}