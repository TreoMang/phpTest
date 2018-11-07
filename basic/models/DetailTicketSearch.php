<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetailTicket;

/**
 * DetailTicketSearch represents the model behind the search form of `app\models\DetailTicket`.
 */
class DetailTicketSearch extends DetailTicket
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TicketId', 'BookID', 'TrainId', 'CarriageId', 'ScheduleId', 'PassengerName', 'Object_', 'PassportNumber', 'State_'], 'safe'],
            [['SeatId', 'Fee'], 'integer'],
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
        $query = DetailTicket::find();

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
            'Fee' => $this->Fee,
        ]);

        $query->andFilterWhere(['like', 'TicketId', $this->TicketId])
            ->andFilterWhere(['like', 'BookID', $this->BookID])
            ->andFilterWhere(['like', 'TrainId', $this->TrainId])
            ->andFilterWhere(['like', 'CarriageId', $this->CarriageId])
            ->andFilterWhere(['like', 'ScheduleId', $this->ScheduleId])
            ->andFilterWhere(['like', 'PassengerName', $this->PassengerName])
            ->andFilterWhere(['like', 'Object_', $this->Object_])
            ->andFilterWhere(['like', 'PassportNumber', $this->PassportNumber])
            ->andFilterWhere(['like', 'State_', $this->State_]);

        return $dataProvider;
    }
}
