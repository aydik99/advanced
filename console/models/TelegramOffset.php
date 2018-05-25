<?php

namespace console\models;

use Yii;

/**
 * This is the model class for table "telegram_offset".
 *
 * @property int $id_offset
 * @property string $timestamp_offset
 */
class TelegramOffset extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telegram_offset';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['timestamp_offset'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_offset' => 'Id Offset',
            'timestamp_offset' => 'Timestamp Offset',
        ];
    }
}
