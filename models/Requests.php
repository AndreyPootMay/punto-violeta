<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "requests".
 *
 * @property int $id
 * @property int $safety_place_id
 * @property int $user_id
 * @property string $full_name
 * @property string $age_old
 * @property string $folio
 * @property string $lat
 * @property string $long
 * @property string $details
 * @property int $cancelled
 * @property int $active
 * @property string $createdAt
 * @property string $updatedAt
 */
class Requests extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'requests';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['safety_place_id', 'user_id', 'full_name', 'age_old', 'folio', 'lat', 'long', 'details'], 'required'],
            [['safety_place_id', 'user_id', 'cancelled', 'active'], 'integer'],
            [['details'], 'string'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['full_name'], 'string', 'max' => 150],
            [['age_old'], 'string', 'max' => 11],
            [['folio'], 'string', 'max' => 20],
            [['lat', 'long'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'safety_place_id' => Yii::t('app', 'Safety Place ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'full_name' => Yii::t('app', 'Full Name'),
            'age_old' => Yii::t('app', 'Age Old'),
            'folio' => Yii::t('app', 'Folio'),
            'lat' => Yii::t('app', 'Lat'),
            'long' => Yii::t('app', 'Long'),
            'details' => Yii::t('app', 'Details'),
            'cancelled' => Yii::t('app', 'Cancelled'),
            'active' => Yii::t('app', 'Active'),
            'createdAt' => Yii::t('app', 'Created At'),
            'updatedAt' => Yii::t('app', 'Updated At'),
        ];
    }
}
