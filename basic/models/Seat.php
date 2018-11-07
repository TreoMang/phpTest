<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Seat".
 *
 * @property int $SeatId
 * @property string $CarriageId
 * @property string $TrainId
 * @property string $State_
 *
 * @property DetailTicket[] $detailTickets
 * @property Carriage $train
 */
class Seat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Seat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SeatId', 'CarriageId', 'TrainId'], 'required'],
            [['SeatId'], 'integer'],
            [['CarriageId', 'TrainId', 'State_'], 'string'],
            [['CarriageId', 'SeatId', 'TrainId'], 'unique', 'targetAttribute' => ['CarriageId', 'SeatId', 'TrainId']],
            [['TrainId'], 'exist', 'skipOnError' => true, 'targetClass' => Carriage::className(), 'targetAttribute' => ['TrainId' => 'TrainId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'SeatId' => 'Seat ID',
            'CarriageId' => 'Carriage ID',
            'TrainId' => 'Train ID',
            'State_' => 'State',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTickets()
    {
        return $this->hasMany(DetailTicket::className(), ['TrainId' => 'TrainId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrain()
    {
        return $this->hasOne(Carriage::className(), ['TrainId' => 'TrainId']);
    }
}
