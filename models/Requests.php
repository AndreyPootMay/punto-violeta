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
            [
                [
                    'safety_place_id', 'user_id', 'full_name', 'age_old', 'lat', 'long', 'details'
                ], 'required'
            ],
            [['safety_place_id', 'user_id', 'folio', 'cancelled', 'active'], 'integer'],
            [['details'], 'string'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['full_name'], 'string', 'max' => 150],
            [['age_old'], 'string', 'max' => 11],
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
            'safety_place_id' => Yii::t('app', 'Punto rosa'),
            'user_id' => Yii::t('app', 'Usuario'),
            'full_name' => Yii::t('app', 'Nombre completo'),
            'age_old' => Yii::t('app', 'Edad'),
            'folio' => Yii::t('app', 'Folio'),
            'lat' => Yii::t('app', 'Lat'),
            'long' => Yii::t('app', 'Long'),
            'details' => Yii::t('app', 'Detalles'),
            'cancelled' => Yii::t('app', 'Cancelado'),
            'active' => Yii::t('app', 'Activo'),
            'createdAt' => Yii::t('app', 'Creado el'),
            'updatedAt' => Yii::t('app', 'Editado el'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSafetyPlace()
    {
        return $this->hasOne(SafetyPlaces::class, ['id' => 'safety_place_id']);
    }
}
