<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Bookticket".
 *
 * @property string $BookID
 * @property int $NumberTicket
 * @property int $Total_amount
 *
 * @property DetailTicket[] $detailTickets
 */
class Bookticket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Bookticket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BookID'], 'required'],
            [['BookID'], 'string'],
            [['NumberTicket', 'Total_amount'], 'integer'],
            [['BookID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'BookID' => 'Book ID',
            'NumberTicket' => 'Number Ticket',
            'Total_amount' => 'Total Amount',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTickets()
    {
        return $this->hasMany(DetailTicket::className(), ['BookID' => 'BookID']);
    }
}
