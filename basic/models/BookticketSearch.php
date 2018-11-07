<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bookticket;

/**
 * BookticketSearch represents the model behind the search form of `app\models\Bookticket`.
 */
class BookticketSearch extends Bookticket
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BookID'], 'safe'],
            [['NumberTicket', 'Total_amount'], 'integer'],
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
        $query = Bookticket::find();

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
            'NumberTicket' => $this->NumberTicket,
            'Total_amount' => $this->Total_amount,
        ]);

        $query->andFilterWhere(['like', 'BookID', $this->BookID]);

        return $dataProvider;
    }
}
