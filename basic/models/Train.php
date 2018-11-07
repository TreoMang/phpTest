<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Train".
 *
 * @property string $TrainId
 *
 * @property Carriage[] $carriages
 * @property Schedule[] $schedules
 */
class Train extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Train';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TrainId'], 'required'],
            [['TrainId'], 'string'],
            [['TrainId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'TrainId' => 'Train ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarriages()
    {
        return $this->hasMany(Carriage::className(), ['TrainId' => 'TrainId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['TrainId' => 'TrainId']);
    }
}
