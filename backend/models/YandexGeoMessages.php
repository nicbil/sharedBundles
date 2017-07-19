<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yandex_geo_errors".
 *
 * @property integer $id
 * @property string $code
 * @property string $text
 */
class YandexGeoMessages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yandex_geo_messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'text'], 'required'],
            [['code', 'text'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'text' => 'Text',
        ];
    }
}
