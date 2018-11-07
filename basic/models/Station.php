<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Station".
 *
 * @property string $StationId
 * @property string $StationName
 * @property string $Address_
 *
 * @property FromTo[] $fromTos
 * @property FromTo[] $fromTos0
 */
class Station extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Station';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['StationId', 'StationName', 'Address_'], 'required'],
            [['StationId', 'StationName', 'Address_'], 'string'],
            [['StationId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'StationId' => 'Station ID',
            'StationName' => 'Station Name',
            'Address_' => 'Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFromTos()
    {
        return $this->hasMany(FromTo::className(), ['DeparStation' => 'StationId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFromTos0()
    {
        return $this->hasMany(FromTo::className(), ['GoalStation' => 'StationId']);
    }
}
