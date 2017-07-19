<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yandex_geo_content".
 *
 * @property integer $id
 * @property string $code
 * @property string $text
 * @property string $active
 */
class YandexGeoContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yandex_geo_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_page', 'text', 'url'], 'required'],
            [['name_page', 'text', 'active', 'url'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_page' => 'Name page',
            'text' => 'Text',
            'active' => 'Active',
            'url' => 'URL'
        ];
    }
}
