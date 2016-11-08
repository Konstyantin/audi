<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 08.11.16
 * Time: 15:06
 */

namespace app\models\base;

use Yii;
class BaseRequest
{
    /**
     * Check execute if the request
     *
     * @return bool
     */
    public static function checkRequest()
    {
        if(Yii::$app->request->post()){
            return true;
        }
    }

    /**
     * Get param from request
     *
     * @return mixed
     */
    public static function getParamOnUrl($param)
    {
        return Yii::$app->request->get($param);
    }

    /**
     * Check execute if the model request
     *
     * @param $model
     * @return bool
     */
    public static function checkModelRequest($model)
    {
        if($model->load(Yii::$app->request->post())){
            return true;
        }
    }
}