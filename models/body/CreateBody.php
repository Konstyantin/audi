<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 02.11.16
 * Time: 13:16
 */
namespace app\models\body;

use yii\base\Model;

/**
 * Class CreateBoyd is the model which set rules for build CreateBody and validation from input data
 * @package app\models\body
 */
class CreateBody extends Model
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
            [['height','width','length','wheelbase'],'number','min' => 1500, 'max' => 8500],
            [['weight'],'number','min' => 1000,'max' => 5000]
        ];
    }

    /**
     * Create new Body and add it in database
     * take array data from form CreateBody
     *
     * @param $values
     */
    public function create($values)
    {
        $body = new Body(['scenario' => Body::SCENARIO_BODY]);
        $body->attributes = $values;
        $body->save();
    }
}