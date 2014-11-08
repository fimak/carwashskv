<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photo_video".
 *
 * @property integer $id
 * @property string $type
 * @property string $name
 * @property string $url
 * @property integer $created_at
 * @property integer $updated_at
 */
class PhotoVideo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photo_video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'url'], 'string', 'max' => 255]
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
            'name' => 'Name',
            'url' => 'Url',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
