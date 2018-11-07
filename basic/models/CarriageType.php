<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "CarriageType".
 *
 * @property string $CarriageTypeId
 * @property string $CarriageTypeName
 *
 * @property Carriage[] $carriages
 */
class CarriageType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CarriageType';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CarriageTypeId'], 'required'],
            [['CarriageTypeId', 'CarriageTypeName'], 'string'],
            [['CarriageTypeId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CarriageTypeId' => 'Carriage Type ID',
            'CarriageTypeName' => 'Carriage Type Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarriages()
    {
        return $this->hasMany(Carriage::className(), ['CarriageTypeId' => 'CarriageTypeId']);
    }
}
