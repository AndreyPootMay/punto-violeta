<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "safety_places".
 *
 * @property int $id
 * @property string $name
 * @property string $bussiness_name
 * @property string $country
 * @property string $state
 * @property string $address
 * @property string $lat
 * @property string $long
 * @property string $details
 * @property int $active
 * @property string $createdAt
 * @property string $updatedAt
 */
class SafetyPlaces extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'safety_places';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'bussiness_name', 'country', 'state', 'address', 'lat', 'long', 'details'], 'required'],
            [['address', 'details'], 'string'],
            [['active'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['name', 'bussiness_name', 'country', 'state'], 'string', 'max' => 100],
            [['lat', 'long'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'bussiness_name' => Yii::t('app', 'Bussiness Name'),
            'country' => Yii::t('app', 'Country'),
            'state' => Yii::t('app', 'State'),
            'address' => Yii::t('app', 'Address'),
            'lat' => Yii::t('app', 'Lat'),
            'long' => Yii::t('app', 'Long'),
            'details' => Yii::t('app', 'Details'),
            'active' => Yii::t('app', 'Active'),
            'createdAt' => Yii::t('app', 'Created At'),
            'updatedAt' => Yii::t('app', 'Updated At'),
        ];
    }
}
