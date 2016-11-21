<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.11.16
 * Time: 20:25
 */

namespace app\models\body;

use yii\base\Model;

/**
 * Class UpdateBody is the model which set rules for build UpdateEngine and Update data item
 *
 * @package app\models\engine
 */
class UpdateBody extends Model
{
    /** @var int| $height contains height car */
    public $height;
    /** @var int| $width contains width car */
    public $width;
    /** @var int| $length contains length car */
    public $length;
    /** @var int| $wheelbase contains wheelbase car */
    public $wheelbase;
    /** @var int| $drag contains drag car */
    public $drag;
    /** @var int| $weight contains weight car */
    public $weight;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['height','width','length','wheelbase','drag','weight'],'required'],
            [['height','width','length','wheelbase'],'number','min' => 1300, 'max' => 8500],
            [['weight'],'number','min' => 1000,'max' => 5000],
        ];
    }

    /**
     * Update Body and add it in database
     * take array data from form CreateBody
     *
     * @param $values
     */
    public function update($item,$values)
    {
        $body = $item;
        $body->updateAttributes($values);
        $body->update();
        return $body;
    }
}