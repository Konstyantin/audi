<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 23:20
 */

namespace app\controllers;

use Yii;
use yii\web\UploadedFile;
use app\models\image\UploadForm;
use app\controllers\BaseController;
use app\models\image\ImageList;

/**
 * Class ImageController let us manipulate images
 * @package app\controllers
 */
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


    /**
     * Search and display search data
     * 
     * @return string
     */
    public function actionList()
    {
        $model = new ImageList();

        $path = $model->getDataRequest('path');
        $imageList = $model->loadImage($path);

        return $this->render('list',compact('model','imageList','path'));
    }

    /**
     * Action Delete allow us delete files
     */
    public function actionDelete()
    {
        $image = Yii::$app->request->get('param');

        $model = new ImageList();

        if($model->deleteFile($image)){
            $this->setFlash('image_delete','Image deleted success');
        }
    }
}