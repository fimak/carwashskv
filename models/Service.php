<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property integer $id
 * @property string $type
 * @property string $service
 * @property double $cost
 * @property integer $created_at
 * @property integer $updated_at
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'service', 'created_at', 'updated_at'], 'required'],
            [['cost'], 'number'],
            [['created_at', 'updated_at'], 'integer'],
            [['type', 'service'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'service' => 'Service',
            'cost' => 'Cost',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
