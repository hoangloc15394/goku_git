<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fileimg".
 *
 * @property integer $id
 * @property string $name
 * @property string $img
 */
class Fileimg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fileimg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 100],
            [['img'],'required','on' => 'create'],
            [['img'],'file','extensions'=>'jpg, jpeg, png', 'maxSize'=>1024 * 1024 * 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'img' => 'Img',
        ];
    }
}
