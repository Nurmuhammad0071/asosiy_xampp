<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tuman".
 *
 * @property int $id
 * @property int $viloyat_id
 * @property string $tnomi
 *
 * @property Viloyat $viloyat
 */
class Tuman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tuman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['viloyat_id', 'tnomi'], 'required'],
            [['viloyat_id'], 'integer'],
            [['tnomi'], 'string', 'max' => 255],
            [['viloyat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Viloyat::className(), 'targetAttribute' => ['viloyat_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'viloyat_id' => 'Viloyat ID',
            'tnomi' => 'Tnomi',
        ];
    }

    /**
     * Gets query for [[Viloyat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getViloyat()
    {
        return $this->hasOne(Viloyat::className(), ['id' => 'viloyat_id']);
    }
}
