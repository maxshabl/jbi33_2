<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Goods;

/**
 * GoodSearch represents the model behind the search form of `frontend\models\Goods`.
 */
class GoodSearch extends Goods
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['good_id', 'price'], 'integer'],
            [['title', 'short_descr',  'slug', 'html_kw', 'html_descr', 'full_descr', 'img'], 'safe'],
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
        $query = Goods::find();

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
            'good_id' => $this->good_id,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'short_descr', $this->short_descr])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'html_kw', $this->html_kw])
            ->andFilterWhere(['like', 'html_descr', $this->html_descr])
            ->andFilterWhere(['like', 'full_descr', $this->full_descr])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}
