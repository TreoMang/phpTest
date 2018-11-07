<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Carriage".
 *
 * @property string $CarriageId
 * @property string $TrainId
 * @property string $CarriageTypeId
 * @property int $NumberSeat
 *
 * @property Train $train
 * @property CarriageType $carriageType
 * @property Seat[] $seats
 */
class Carriage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Carriage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CarriageId', 'TrainId'], 'required'],
            [['CarriageId', 'TrainId', 'CarriageTypeId'], 'string'],
            [['NumberSeat'], 'integer'],
            [['CarriageId', 'TrainId'], 'unique', 'targetAttribute' => ['CarriageId', 'TrainId']],
            [['TrainId'], 'exist', 'skipOnError' => true, 'targetClass' => Train::className(), 'targetAttribute' => ['TrainId' => 'TrainId']],
            [['CarriageTypeId'], 'exist', 'skipOnError' => true, 'targetClass' => CarriageType::className(), 'targetAttribute' => ['CarriageTypeId' => 'CarriageTypeId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CarriageId' => 'Carriage ID',
            'TrainId' => 'Train ID',
            'CarriageTypeId' => 'Carriage Type ID',
            'NumberSeat' => 'Number Seat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrain()
    {
        return $this->hasOne(Train::className(), ['TrainId' => 'TrainId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarriageType()
    {
        return $this->hasOne(CarriageType::className(), ['CarriageTypeId' => 'CarriageTypeId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeats()
    {
        return $this->hasMany(Seat::className(), ['TrainId' => 'TrainId']);
    }
}
