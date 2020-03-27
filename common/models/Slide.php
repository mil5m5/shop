<?php

namespace common\models;

use Yii;
use \yii\helpers\Url;


/**
 * This is the model class for table "slides".
 *
 * @property int $id
 * @property string|null $image
 * @property string|null $title
 * @property string|null $description
 */
class Slide extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slides';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required' ],
            [['title', 'description'], 'string', 'max' => 255],
            [['image','imageFile'], 'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }

    public function getImg()
    {
        return Url::to('uploads/slide/' . $this->image);
    }
}
