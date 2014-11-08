<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property integer $id
 * @property double $rating
 * @property string $author
 * @property string $text
 * @property string $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rating', 'author', 'text'], 'required'],
            [['rating'], 'number'],
            [['text', 'status'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['author'], 'string', 'max' => 16, 'min' => 2],
            [['author'], 'match', 'pattern' => '/^[a-zA-Zа-яА-Я]{2,16}$/', 'message' => 'Поле должно содержать только буквы'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rating' => 'Rating',
            'author' => 'Author',
            'text' => 'Text',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
