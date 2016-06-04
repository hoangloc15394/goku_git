<?php

namespace frontend\models;

use Yii;
use yii\web\Uploadedposters;

/**
 * This is the model class for table "phim1".
 *
 * @property integer $ma_phim
 * @property string $ten_phim
 * @property string $ten_tieng_anh
 * @property string $nam_phat_hanh
 * @property string $thoi_luong
 * @property integer $ma_dao_dien
 * @property integer $ma_quoc_gia
 * @property integer $ma_danh_muc
 * @property string $mo_ta
 * @property string $poster
 * @property integer $luot_view
 * @property string $anh_dai_dien
 * @property string $ngay_upload
 * @property string $tinh_trang
 * @property string $IMDB
 * @property integer $phim_tag
 * @property string $url_trailer
 * @property string $url_phim
 *
 * @property DienVienPhim[] $dienVienPhims
 * @property TheLoaiPhim[] $theLoaiPhims
 */
class Phim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phim1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten_phim', 'ten_tieng_anh', 'nam_phat_hanh', 'thoi_luong', 'ma_quoc_gia', 'ma_danh_muc', 'mo_ta', 'IMDB', 'phim_tag', 'url_trailer', 'url_phim'], 'required'],
            [['ma_dao_dien', 'ma_quoc_gia', 'ma_danh_muc', 'luot_view', 'phim_tag'], 'integer'],
            [['mo_ta', 'tinh_trang', 'IMDB'], 'string'],
            [['ngay_upload'], 'safe'],
            [['ten_phim', 'ten_tieng_anh', 'nam_phat_hanh', 'thoi_luong'], 'string', 'max' => 300],
            [['url_trailer', 'url_phim'], 'string', 'max' => 200],
            [['poster,anh_dai_dien'],'required','on' => 'create'],
            [['poster,anh_dai_dien'],'file','extensions'=>'jpg, jpeg, png', 'maxSize'=>1024 * 1024 * 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ma_phim' => 'Ma Phim',
            'ten_phim' => 'Ten Phim',
            'ten_tieng_anh' => 'Ten Tieng Anh',
            'nam_phat_hanh' => 'Nam Phat Hanh',
            'thoi_luong' => 'Thoi Luong',
            'ma_dao_dien' => 'Ma Dao Dien',
            'ma_quoc_gia' => 'Ma Quoc Gia',
            'ma_danh_muc' => 'Ma Danh Muc',
            'mo_ta' => 'Mo Ta',
            'poster' => 'Poster',
            'luot_view' => 'Luot View',
            'anh_dai_dien' => 'Anh Dai Dien',
            'ngay_upload' => 'Ngay Upload',
            'tinh_trang' => 'Tinh Trang',
            'IMDB' => 'Imdb',
            'phim_tag' => 'Phim Tag',
            'url_trailer' => 'Url Trailer',
            'url_phim' => 'Url Phim',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDienVienPhims()
    {
        return $this->hasMany(DienVienPhim::className(), ['ma_phim' => 'ma_phim']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTheLoaiPhims()
    {
        return $this->hasMany(TheLoaiPhim::className(), ['ma_phim' => 'ma_phim']);
    }

}
