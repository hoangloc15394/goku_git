<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Danhmuc;

/**
 * DanhmucSearch represents the model behind the search form about `frontend\models\Danhmuc`.
 */
class DanhmucSearch extends Danhmuc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ma_danh_muc'], 'integer'],
            [['ten_danh_muc'], 'safe'],
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
        $query = Danhmuc::find();

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
            'ma_danh_muc' => $this->ma_danh_muc,
        ]);

        $query->andFilterWhere(['like', 'ten_danh_muc', $this->ten_danh_muc]);

        return $dataProvider;
    }
}
