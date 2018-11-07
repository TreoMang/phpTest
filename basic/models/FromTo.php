<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "From_to".
 *
 * @property string $FTid
 * @property string $DeparStation
 * @property string $GoalStation
 * @property int $Howfar
 *
 * @property Fare[] $fares
 * @property Station $deparStation
 * @property Station $goalStation
 * @property Schedule[] $schedules
 */
class FromTo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'From_to';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FTid'], 'required'],
            [['FTid', 'DeparStation', 'GoalStation'], 'string'],
            [['Howfar'], 'integer'],
            [['FTid'], 'unique'],
            [['DeparStation'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['DeparStation' => 'StationId']],
            [['GoalStation'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['GoalStation' => 'StationId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'FTid' => 'Ftid',
            'DeparStation' => 'Depar Station',
            'GoalStation' => 'Goal Station',
            'Howfar' => 'Howfar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFares()
    {
        return $this->hasMany(Fare::className(), ['FTid' => 'FTid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeparStation()
    {
        return $this->hasOne(Station::className(), ['StationId' => 'DeparStation']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoalStation()
    {
        return $this->hasOne(Station::className(), ['StationId' => 'GoalStation']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['FTid' => 'FTid']);
    }
}
