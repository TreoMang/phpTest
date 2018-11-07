<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Detail_ticket".
 *
 * @property string $TicketId
 * @property string $BookID
 * @property string $TrainId
 * @property string $CarriageId
 * @property int $SeatId
 * @property string $ScheduleId
 * @property string $PassengerName
 * @property string $Object_
 * @property string $PassportNumber
 * @property string $State_
 * @property int $Fee
 *
 * @property Schedule $schedule
 * @property Seat $train
 * @property Bookticket $book
 */
class DetailTicket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Detail_ticket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TicketId', 'BookID'], 'required'],
            [['TicketId', 'BookID', 'TrainId', 'CarriageId', 'ScheduleId', 'PassengerName', 'Object_', 'PassportNumber', 'State_'], 'string'],
            [['SeatId', 'Fee'], 'integer'],
            [['BookID', 'TicketId'], 'unique', 'targetAttribute' => ['BookID', 'TicketId']],
            [['ScheduleId'], 'exist', 'skipOnError' => true, 'targetClass' => Schedule::className(), 'targetAttribute' => ['ScheduleId' => 'ScheduleId']],
            [['TrainId'], 'exist', 'skipOnError' => true, 'targetClass' => Seat::className(), 'targetAttribute' => ['TrainId' => 'TrainId']],
            [['BookID'], 'exist', 'skipOnError' => true, 'targetClass' => Bookticket::className(), 'targetAttribute' => ['BookID' => 'BookID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'TicketId' => 'Ticket ID',
            'BookID' => 'Book ID',
            'TrainId' => 'Train ID',
            'CarriageId' => 'Carriage ID',
            'SeatId' => 'Seat ID',
            'ScheduleId' => 'Schedule ID',
            'PassengerName' => 'Passenger Name',
            'Object_' => 'Object',
            'PassportNumber' => 'Passport Number',
            'State_' => 'State',
            'Fee' => 'Fee',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedule()
    {
        return $this->hasOne(Schedule::className(), ['ScheduleId' => 'ScheduleId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrain()
    {
        return $this->hasOne(Seat::className(), ['TrainId' => 'TrainId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Bookticket::className(), ['BookID' => 'BookID']);
    }
}
