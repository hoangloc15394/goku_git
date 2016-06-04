<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "danh_muc".
 *
 * @property integer $ma_danh_muc
 * @property string $ten_danh_muc
 */
class DanhMuc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'danh_muc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten_danh_muc'], 'required'],
            [['ten_danh_muc'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ma_danh_muc' => 'Ma Danh Muc',
            'ten_danh_muc' => 'Ten Danh Muc',
        ];
    }
}
