<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Fare".
 *
 * @property string $FareId
 * @property string $FTid
 * @property int $fee
 * @property string $CarriTypeId
 *
 * @property FromTo $fT
 */
class Fare extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Fare';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FareId'], 'required'],
            [['FareId', 'FTid', 'CarriTypeId'], 'string'],
            [['fee'], 'integer'],
            [['FareId'], 'unique'],
            [['FTid'], 'exist', 'skipOnError' => true, 'targetClass' => FromTo::className(), 'targetAttribute' => ['FTid' => 'FTid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'FareId' => 'Fare ID',
            'FTid' => 'Ftid',
            'fee' => 'Fee',
            'CarriTypeId' => 'Carri Type ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFT()
    {
        return $this->hasOne(FromTo::className(), ['FTid' => 'FTid']);
    }
}
