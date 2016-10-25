<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 23:20
 */

namespace app\controllers;

use Yii;
use app\models\image\UploadForm;
use app\controllers\BaseController;
use yii\web\UploadedFile;

class ImageController extends BaseController
{
    /**
     * Perform upload file
     *
     * @return string|\yii\web\Response
     */
    public function actionUpload()
    {
        $model = new UploadForm();

        if ($this->checkRequest($model)) {
            $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            if ($model->upload()) {
                $this->setFlash('image_upload','Image upload successful');
                return $this->goBack(['/image/upload']);
            }
        }

        return $this->render('upload',['model' => $model]);
    }
}