<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CarriageType;

/**
 * CarriageTypeSearch represents the model behind the search form of `app\models\CarriageType`.
 */
class CarriageTypeSearch extends CarriageType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CarriageTypeId', 'CarriageTypeName'], 'safe'],
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
        $query = CarriageType::find();

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
        $query->andFilterWhere(['like', 'CarriageTypeId', $this->CarriageTypeId])
            ->andFilterWhere(['like', 'CarriageTypeName', $this->CarriageTypeName]);

        return $dataProvider;
    }
}
