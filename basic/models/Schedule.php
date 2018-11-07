<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Schedule".
 *
 * @property string $ScheduleId
 * @property string $FTid
 * @property string $TrainId
 * @property string $DeparTime
 * @property string $StopTime
 *
 * @property DetailTicket[] $detailTickets
 * @property Train $train
 * @property FromTo $fT
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Schedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ScheduleId'], 'required'],
            [['ScheduleId', 'FTid', 'TrainId'], 'string'],
            [['DeparTime', 'StopTime'], 'safe'],
            [['ScheduleId'], 'unique'],
            [['TrainId'], 'exist', 'skipOnError' => true, 'targetClass' => Train::className(), 'targetAttribute' => ['TrainId' => 'TrainId']],
            [['FTid'], 'exist', 'skipOnError' => true, 'targetClass' => FromTo::className(), 'targetAttribute' => ['FTid' => 'FTid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ScheduleId' => 'Schedule ID',
            'FTid' => 'Ftid',
            'TrainId' => 'Train ID',
            'DeparTime' => 'Depar Time',
            'StopTime' => 'Stop Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTickets()
    {
        return $this->hasMany(DetailTicket::className(), ['ScheduleId' => 'ScheduleId']);
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
    public function getFT()
    {
        return $this->hasOne(FromTo::className(), ['FTid' => 'FTid']);
    }
}
