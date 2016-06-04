<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Phim;

/**
 * PhimSearch represents the model behind the search form about `frontend\models\Phim`.
 */
class PhimSearch extends Phim
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ma_phim', 'ma_dao_dien', 'ma_quoc_gia', 'ma_danh_muc', 'luot_view', 'phim_tag'], 'integer'],
            [['ten_phim', 'ten_tieng_anh', 'nam_phat_hanh', 'thoi_luong', 'mo_ta', 'poster', 'anh_dai_dien', 'ngay_upload', 'tinh_trang', 'IMDB', 'url_trailer', 'url_phim'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Phim::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ma_phim' => $this->ma_phim,
            'ma_dao_dien' => $this->ma_dao_dien,
            'ma_quoc_gia' => $this->ma_quoc_gia,
            'ma_danh_muc' => $this->ma_danh_muc,
            'luot_view' => $this->luot_view,
            'ngay_upload' => $this->ngay_upload,
            'phim_tag' => $this->phim_tag,
        ]);

        $query->andFilterWhere(['like', 'ten_phim', $this->ten_phim])
            ->andFilterWhere(['like', 'ten_tieng_anh', $this->ten_tieng_anh])
            ->andFilterWhere(['like', 'nam_phat_hanh', $this->nam_phat_hanh])
            ->andFilterWhere(['like', 'thoi_luong', $this->thoi_luong])
            ->andFilterWhere(['like', 'mo_ta', $this->mo_ta])
            ->andFilterWhere(['like', 'poster', $this->poster])
            ->andFilterWhere(['like', 'anh_dai_dien', $this->anh_dai_dien])
            ->andFilterWhere(['like', 'tinh_trang', $this->tinh_trang])
            ->andFilterWhere(['like', 'IMDB', $this->IMDB])
            ->andFilterWhere(['like', 'url_trailer', $this->url_trailer])
            ->andFilterWhere(['like', 'url_phim', $this->url_phim]);

        return $dataProvider;
    }
}
