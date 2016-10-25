<?php

/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 24.10.16
 * Time: 23:23
 */
namespace app\models\image;

use yii\base\Model;

/**
 * Class UploadForm perform upload file in the establishment of the directory
 * 
 * @package app\models\image
 */
class UploadForm extends Model
{
    /** @var mixed| $imageFiles set uploading file */
    public $imageFiles;
    /** @var string| $path set path for save uploading file */
    public $path;
    /** @var string| $name set name uploading file */
    public $name;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name','path'],'required'],
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4]
        ];
    }

    /**
     * Perform validation uploading file and save file
     * for set $this->path and with set $this->name
     *
     * @return bool
     */
    public function upload()
    {
        if ($this->validate()) {
            foreach ($this->imageFiles as $file) {
                $file->saveAs($this->path . $this->name . '.' . $file->extension);
            }
            return true;
        }
        return false;
    }
}