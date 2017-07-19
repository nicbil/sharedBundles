<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yandex_geo_tabs".
 *
 * @property integer $id
 * @property string $code
 * @property string $text
 * @property string $active
 */
class YandexGeoTabs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yandex_geo_tabs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'required'],
            [['name', 'text', 'active'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'active' => 'Active',
        ];
    }
}
