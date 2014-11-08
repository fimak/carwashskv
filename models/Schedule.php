<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property integer $id
 * @property string $datetime
 * @property string $services
 * @property integer $cost
 * @property string $fio
 * @property integer $phone
 * @property integer $created_at
 * @property integer $updated_at
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['datetime', 'services', 'phone'], 'required'],
            [['datetime'], 'safe'],
            [['cost', 'phone', 'created_at', 'updated_at'], 'integer'],
            [['services', 'fio'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'datetime' => 'Дата и время',
            'services' => 'Услуги',
            'cost' => 'Цена',
            'fio' => 'ФИО',
            'phone' => 'Телефон',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
