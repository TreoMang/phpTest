<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Seat;

/**
 * SeatSearch represents the model behind the search form of `app\models\Seat`.
 */
class SeatSearch extends Seat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SeatId'], 'integer'],
            [['CarriageId', 'TrainId', 'State_'], 'safe'],
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
        $query = Seat::find();

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
            'SeatId' => $this->SeatId,
        ]);

        $query->andFilterWhere(['like', 'CarriageId', $this->CarriageId])
            ->andFilterWhere(['like', 'TrainId', $this->TrainId])
            ->andFilterWhere(['like', 'State_', $this->State_]);

        return $dataProvider;
    }
}
