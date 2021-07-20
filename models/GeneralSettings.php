<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "general_settings".
 *
 * @property int $id
 * @property string $site_name
 * @property string $site_message
 * @property int $status
 * @property int $requests_folio
 */
class GeneralSettings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'general_settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['site_name', 'site_message', 'requests_folio'], 'required'],
            [['site_message'], 'string'],
            [['status', 'requests_folio'], 'integer'],
            [['site_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'site_name' => Yii::t('app', 'Site Name'),
            'site_message' => Yii::t('app', 'Site Message'),
            'status' => Yii::t('app', 'Status'),
            'requests_folio' => Yii::t('app', 'Requests Folio'),
        ];
    }
}
