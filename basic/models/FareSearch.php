<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fare;

/**
 * FareSearch represents the model behind the search form of `app\models\Fare`.
 */
class FareSearch extends Fare
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FareId', 'FTid', 'CarriTypeId'], 'safe'],
            [['fee'], 'integer'],
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
        $query = Fare::find();

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
            'fee' => $this->fee,
        ]);

        $query->andFilterWhere(['like', 'FareId', $this->FareId])
            ->andFilterWhere(['like', 'FTid', $this->FTid])
            ->andFilterWhere(['like', 'CarriTypeId', $this->CarriTypeId]);

        return $dataProvider;
    }
}
