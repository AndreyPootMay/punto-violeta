<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Requests;

/**
 * RequestsSearch represents the model behind the search form of `app\models\Requests`.
 */
class RequestsSearch extends Requests
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'safety_place_id', 'user_id', 'cancelled', 'active'], 'integer'],
            [['full_name', 'age_old', 'folio', 'lat', 'long', 'details', 'createdAt', 'updatedAt'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Requests::find();

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
            'id' => $this->id,
            'safety_place_id' => $this->safety_place_id,
            'user_id' => $this->user_id,
            'cancelled' => $this->cancelled,
            'active' => $this->active,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'age_old', $this->age_old])
            ->andFilterWhere(['like', 'folio', $this->folio])
            ->andFilterWhere(['like', 'lat', $this->lat])
            ->andFilterWhere(['like', 'long', $this->long])
            ->andFilterWhere(['like', 'details', $this->details]);

        return $dataProvider;
    }
}
