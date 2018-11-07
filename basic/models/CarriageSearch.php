<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Carriage;

/**
 * CarriageSearch represents the model behind the search form of `app\models\Carriage`.
 */
class CarriageSearch extends Carriage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CarriageId', 'TrainId', 'CarriageTypeId'], 'safe'],
            [['NumberSeat'], 'integer'],
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
        $query = Carriage::find();

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
            'NumberSeat' => $this->NumberSeat,
        ]);

        $query->andFilterWhere(['like', 'CarriageId', $this->CarriageId])
            ->andFilterWhere(['like', 'TrainId', $this->TrainId])
            ->andFilterWhere(['like', 'CarriageTypeId', $this->CarriageTypeId]);

        return $dataProvider;
    }
}
